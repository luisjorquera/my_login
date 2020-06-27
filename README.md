MyLogin
This is a very basic code to login in php. It is not intended to be used in production.
This code does not use a CMV pattern. It is only a form, it allows creating a session in php and logging out. It is just a code presentation. Use external Bootstrap and Jquery libraries to improve the interface.

Clone project:
To clone this project start a new project on your local server.
Use your favorite console and let's proceed to clone this project:
Search your console for the root of your server: (For example: X:\xampp\htdocs\)

git clone https://github.com/luisjorquera/my_login.git

Add Database:
Using XAMPP in our phpMyAdmin:
Create a new database (for example): testing

Open attachment database.sql
Copy the content, paste in the textarea of ​​the SQL tab while in our testing database and execute (Go)
Done, a new database will have been created with a users table and a testing user.
Remove the database.sql file

Now it is necessary to change the server, database, users and password configuration for the connection in our form in the file:
app/connection/connection.php

Initially, our database has a user mail@test.com/password as a test.
It also has as configuration the value of the variable $ sal
It emits a pattern for the encryption of our passwords.
It is recommended to change this value for a new Key by project key in this step.


It has minimum security measures. It is possible to improve this code by adding security measures such as:
_ Adding Captchat
_ Improved prevention of attacks by injection or brute force
_ Improving user usability by adding error messages
_ Add a security layer in js
_ A long etc
