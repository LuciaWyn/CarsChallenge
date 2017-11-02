# Screenpages Candidate Assessment
v1.0 

&copy; Screen Page Ltd. 2015
## Description

The purpose of this code package is for us to assess your understanding of some the technologies that Screen Pages use daily along with your ability to work in the manner that we are accustomed to.

The mini application provided for this challenge is written and based upon a small and lightweight framework called [Slim](http://www.slimframework.com/).

 JQuery is also present in all pages.



## Installation
Extract all files into the webroot of your development server/environment.

### Apache
A `.htaccess` file is included for support of Apache.

Additionally, make sure your virtual host is configured with the AllowOverride option so that the .htaccess rewrite rules can be used:

`AllowOverride All`

### Nginx
The nginx configuration file should contain this code (along with other settings you may need) in your location block:

`try_files $uri $uri/ /index.php?$args;`

This assumes that you already have a working Nginx/PHP install.


##### Note
We are unable to provide full configurations as there are too many combination of OS / Webserver and PHP install. This application should work under any configuration for a typical MVC framework.




Once the application is running, the home page will give you further details of the challenge.