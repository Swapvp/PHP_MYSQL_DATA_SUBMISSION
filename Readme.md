# I Knew How to do it I just didn't wanna do it

-Open phpMyAdmin: Go to http://localhost/phpmyadmin/ in your browser. <br/>

-Create a Database: Click on the "New" button in the left sidebar and create a new database. <br/>

-Create a Table: Inside your new database, create a table (e.g., users) with appropriate columns  <br/>

`CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone INT(10) NOT NULL,
    email VARCHAR(100) NOT NULL
);`
