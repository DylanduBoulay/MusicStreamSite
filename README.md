# MusicStreamSite
A single-page application Project in the form of a music streaming website.

Developed using HTML, REST, Javascript, PHP and SQL.

Designed to be run locally using XAMPP. 
For reference, I used XAMPP V3.3.0. Using the Apache and MYSQL modules.

This project contains all the client and server functionality and a MySQL database export. 
   

**Hosting and XAMPP**

Head over to https://www.apachefriends.org/ and grab XAMPP. 
Select both the Apache and MySQL modules when installing XAMPP. Once XAMPP has finished installation, and you have added both the MySQL and Apache modules, navigate your XAMPP installation folder for a file called 'htdocs'. 
Place the contents of this repo into that file, as it will need to be seen and made hostable via XAMPP. 

   
**How to access this project.**

1. To access the website, launch the XAMPP control panel, and start both MySQL and Apache modules.
2. You will be missing the required data to draw the music from and must import this file into your XAMPP database via the phpmyadmin window.

    i) This can be accessed using a browser by typing in localhost/phpmyadmin  into the URL line and going to  phpmyadmin > Import.
   
    ii) Select the file located in this repo called musicstreamsite.sql under the MySQLImport file.
   
4. Double check the repo files are stored in your XAMPP directory under XAMPP > htdocs > *musicstreamsite*
5. Using your browse, pull up a new tab and type in localhost/musicstreamsite.
6. Process to create an account to test the project
