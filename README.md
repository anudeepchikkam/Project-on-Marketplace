# Contadel Readme file

This file will explain the structure and method to run any version of the code in this repository 

## Getting Started

1.	Download XAMPP found here: https://www.apachefriends.org/download.html 
2.	Download the contadel folder found here:https://github.com/Brookes2019P00404/MarketPlace2/releases

### Setup

1.	Extract the contadel zip folder and rename the inner folder to contadel
2.  Install XAMPP, copy and paste the contadel folder into C:/xampp/htdocs
2.	Open XAMPP Control Panel and start Apache and MySQL, this will allow you to access the database
3.	Once these modules are running, go to your browser and type in localhost/phpmyadmin
4.	This will load the phpMyAdmin page, click on Databases
5.	Create a new database called “contadel” 
6.	Now go to Import and click choose file which is contadel.sql, then click the Go button
7.	You have now got a users table inside the database to access the server side of the website
8.	Delete contadel.sql from your folder as you will no longer need it
9.	To load the website type in localhost/contadel which will load the Contadel homepage

### Structure of the website
The structure of ther website without login in is as followed:
*	Index - Homepage of Contadel that links to different pages of the website
*	CV - a portfolio of a user
*	Contact - contact form for the user to use (not fully implemented)
*	Register – This is where professionals create their accounts, the details are stored inside the users table, the passwords are also hashed before being sent.
*	Login – This is where the user can log into their dashboard
*	Forgot-password – Reset password by sending email to user (not fully implemented)

After login into the website the structure of the website is as followed:
*	Index – Users own dashboard and search page
*	Courses - Main page of courses that links to individual training courses
*	CV - A portfolio of a user loaded by searching on the index page and Hire me Button opens up a new page with messaging send Text box

## Built With

* [Bootstrap](https://getbootstrap.com/) - Web toolkit
* [SB Admin](https://startbootstrap.com/templates/sb-admin/) - Admin template

## Authors

* **Petar Georgiev** - (https://github.com/petargeorgiev91)
* **Jason Sung** - (https://github.com/jason-sung)
* **Yuk Lee** - (https://github.com/18028578)
* **Braham Doddo Siddo** - (https://github.com/Brookes2019P00404)
* **Vegard Vaglid** - 
* **Anudeep Chikkam** - 
* **Sachin Kumar** - (https://github.com/skgahlyan)

