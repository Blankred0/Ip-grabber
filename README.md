# Ip-grabber
This is a simple Ip graber made in php.You have to send the link to your target and the php file gonna take the information and redirect it instantly on another website of your choice.
To use it, run the commands who follows:
```bash
git clone https://github.com/Blankred0/Ip-grabber
cd Ip-grabber
python3 bot.py
```
It will generate a link for you to view your PHP file in your web browser. `example : localhost:28708`
Then type `serveo` in the menu.
Press ctrl + c to stop the server and 'C' to clear the terminal.
You can avoid your server to crash with `sleep.py` because it refresh the page every 2 min. Run :
```bash
python3 sleep.py  
https://yoursubdomain.serveo.net/
```

You can choose the subdomain by genrating a ssh key with this command :
`ssh-keygen`

Otherwhise the choose subdomain won't work and he choose you a random subdomain.


#Tip: Make sure you have PHP and pyfiglet installed on your computer. :)
For pyfiglet it's `pip install pyfiglet`
For serveo make sure you have open ssh installed.
If you don't have open ssh installed run the folowing command :

For ubutu it's : 
```bash
sudo apt-get update 
sudo apt-get install openssh-server
```
There is maybe some bug, if you find some please tell me thanks :).

#Disclaimer: This code is provided for educational purposes only. I am not responsible for any actions taken using this code.
