# Instagram reposter
### How do i login to my account?
Simply click on the Login button on the navigation bar.
If there is a username instead of the login text, its mean you are already logged to a account
if you wish to **logout of your account** just click on your username,
then click the red logout text button
	
### Can't login to your account? use sessionID ! 
here the 2nd way to force a login to your account if you are getting location checkpoint or any error about loggin in, then your should use this method.

get your session ID:
 1. go to instagram.com.
 2. now login to your account.
 3. click on the lock icon in your url bar and click on cookies.
 4. click on instagram.com and not ~~www.instagram.com~~
 5. find a cookie named sessionid and copy its content.

in the bottom of the login form (username or password) click on advanced login, copy paste your session id in the box, also a csrf token is required, simply find it by the sale way you got your session ID!

*more cookies could be asked. all are findable in the same way, so dont worry.*

then click on login.

 ### I got logged out of my account, what happen ?!
1. you used session ID:
you should not worry at all, you just maybe did a mistake closing your session on the web browser, you just need to 

2. you used normal login:
**first option**: you just changed your password or /and  closed session on your activity manager.
**second option**: you should check your account to see if instagram does no redirect your to */challenge* url, this would mean your account has been locked temporaly and need to verify your information. 
 

### How do it run it?
You should run it with a localhost server, with php support,
if you are on windows: https://www.apachefriends.org/index.html
if you are on macos: https://www.apachefriends.org/xampp-files/8.0.8/xampp-osx-8.0.8-1-vm.dmg
if you are on linux (lampp): https://www.apachefriends.org/xampp-files/8.0.8/xampp-linux-x64-8.0.8-1-installer.run
do no forget to test your php installation first (check requirement)
### DISCLAIMER
I AM NOT REPONSIBLE OF ANYTHING HAPPENING TO YOUR ACCOUNT, REMEMBER THAN USING THIS SOFTWARE IS NOT LEGAL ON INSTAGRAM SIDE

### required
- php 7+
- php-curl


this software was not endorsed by Instagram or any of its affiliates or subsidiaries.