# **LEETSPEEK**
#### Charles Peden & Andrew Devlin, 2/24/2017

&nbsp;
## Description
An App that translates normal into leetspeek

## Specifications

* Turn input string into array of strings. Input: 'hello' Output: 'h', 'e', 'l', 'l', 'o'
* The letter "e" should be replaced with "3". Input: 'e' Output: 3
* The letter "o" should be replaced with "0". Input: 'o' Output: 0
* The capital letter (not the lower case), "I", should be replaced with "1". Input: "I" Output: 1
* All instances of "s" should be replaced with "z" UNLESS it is the first letter of the word. Input: 's' Output: 'z'
* Turn the array of strings into a single string. Input: 'h', 'e', 'l', 'l', 'o' Output: 'hell0'



&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Install and configure Mamp, MySQL, and PDO.
* Go to my [Github repository] (https://github.com/ccbpeden/leetspeek)
* Download the zip file via the green button
* Unzip the file and open the **leetspeek** folder
* Open Terminal, navigate to **leetspeek** project folder, type **_composer install_** and hit enter
* Navigate Terminal to the **leetspeek/web** folder and set up a server by typing **_php -S localhost:8000_**
* Activate Mamp and Start Servers
* Type /Applications/MAMP/Library/bin/mysql --host=localhost -uroot proot
* In a web browser, browse to localhost:888/phpmyadmin.
* Click the import tab in the phpmyadmin gui and select the zipped database included in the project folder.
* The application should now load and be ready to use!
* Type **_localhost:8000_** into your web browser

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [ccbpeden@warpmail.net](mailto:ccbpeden@warpmail.net)._

Copyright (c) 2017 Charles Peden & Andrew Devlin

This software is licensed under the MIT license
