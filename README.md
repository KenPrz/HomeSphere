## About HomeSphere

HomeSphere is a passion project and capstone project currently being developed by fourth-year students from Bicol University. It is a web-based home automation system built using Laravel. The system is planned to utilize devices designed with ESP32 microcontrollers that will utilize the system's API to send and receive data for controlling devices connected to the microcontrollers.

HomeSphere aims to provide a convenient and easy way to automate homes. It will allow users to control their lights, appliances, and other devices from anywhere in the world. The system is still under development, but it has the potential to revolutionize the way people live. It is a project that is both ambitious and innovative, and it is sure to have a positive impact on the world.

## Features

+ Control lights, appliances, and other devices from anywhere in the world.
+ Schedule devices to turn on and off at specific times.
+ Create Modes to automate multiple devices with a single command.
+ Receive notifications when devices are turned on or off.
+ View live video feeds from security cameras.

## Requirements 📒
Make sure to have the following installed first
+ [NodeJS](https://nodejs.org/en)
+ [Composer](https://getcomposer.org/)
+ [Xammp](https://www.apachefriends.org/) or [MySQL Workbench](https://www.mysql.com/products/workbench/)
+ [Git](https://git-scm.com/) or [Github Desktop](https://desktop.github.com/)

### Installation 🔧

#### Making the Database 

##### xammp
+ Start the xammp server
+ Open xammp control panel
+ Start 'Apache' & 'MySQL' modules
+ Check the site: http://localhost/phpmyadmin
+ Create a new database in phpmyadmin and name it 'homesphere'

##### MySQL

+ Open CMD
+ login to your SQL account ``mysql -u [username] -p [password];``
+ ``CREATE DATABASE homesphere;``
+ ``exit;``

#### Clone the repository

##### git bash
+ Open your VS Code to the folder where u wish to clone the repository. 
cmd : ``code .``

+ open the built in terminal of VScode ``ctrl + ~``
+ enter the command : ``git clone https://github.com/KenPrz/HomeSphere.git ``
+ Change terminal directory `` cd homesphere ``

##### Github Desktop
+ Open the [homesphere repository](https://github.com/KenPrz/HomeSphere)
+ At the right side you'll see a green button with the word code, click that.
+ click open with github desktop, this will clone the repository automatically to your system.

+ in the github desktop app, click the homesphere repository and click the `open with visual studio code`.

#### Initializing the Project

Make sure that you are inside the HomeSphere project Directory before issuing the following commands.


Install composer 
```
composer i
```
Install NPM
```
npm i
```
Create a new env file
```
copy .env.example .env
```
Generate new app key
```
php artisan key:generate
```
#### Connecting to the database.
Inside the project directory after running the command ``copy .env.example .env`` a new env file will be created. Open the file and input your database credentials. 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homesphere
DB_USERNAME=[your_username] (usually root is the default)
DB_PASSWORD=[your db password]
```
#### Run the migrations
run the command inside the project file
```
php artisan migrate
```
#### Serve the project

local machine serving
```
php artisan serve
```
local network serve

```
php artisan serve --host [your IP] --port 80
```

## License

The Project is an open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
