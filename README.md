PHP-WebDriver
=============

This is a quick PHP Unit test that loads a webpage using PHP WebDriver

https://github.com/facebook/php-webdriver

The path given to the require_once directive in bootstrap.php should point to
PHP WebDriver's \_\_init\_\_.php file, wherever that is on your system.

If you don't already have it, you can get PHP Unit here:

http://phpunit.de/manual/current/en/installation.html

You'll also need to download the Selenium server from here:

http://selenium.googlecode.com/files/selenium-server-standalone-2.37.0.jar

You can then start the server from the command line (terminal) by navigating to 
the directory you downloaded it it to and using the following command:

java -jar selenium-server-standalone-2.37.0.jar 

If you don't have Java installed you can get that here:
https://java.com/en/download/index.jsp

You can read about PHP Unit and NetBeans here:

https://netbeans.org/kb/docs/php/phpunit.html