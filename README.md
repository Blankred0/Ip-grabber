# Ip-grabber
This is a simple Ip graber made in php.You have to send the link to your target and the php file gonna take the information and redirect it instantly on another website of your choice.
To use it, run the commands who follows (you may need sudo permissions):
```bash
git clone https://github.com/Blankred0/Ip-grabber
cd Ip-grabber
pip install -r requirements.txt
chmod +x reset
chmod +x start
./start
```
It will generate a link for you to view your PHP file in your web browser. `example : localhost:28708`
Then type `serveo` in the menu.
Press ctrl + c to stop the server and 'C' to clear the terminal.
You can avoid your server to power off with `sleep.py` because it refresh the page every 2 min. Run :
```bash
python3 files/sleep.py  
https://yoursubdomain.serveo.net/
```

You can choose the subdomain by genrating a ssh key with this command :
`ssh-keygen`

Otherwhise the choose subdomain won't work and he choose you a random subdomain.


#Tip: Make sure you have PHP installed on your computer.
For serveo make sure you have open ssh installed.
If you don't have open ssh installed run the folowing command :

For debian it's : 
```bash
sudo apt-get update 
sudo apt-get install openssh-server
```
There is maybe some bug, if you find some please tell me thanks :).

ONLY USE THE `./reset` IF YOU WANT TO DELETE ALL THE LOGS.

#Disclaimer: This code is provided for educational purposes only. I am not responsible for any actions taken using this code.
