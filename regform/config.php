<?php
   define('database_server', '127.0.0.1:3307');
   define('database_username', 'root');
   define('database_password', '');
   define('database_database', 'firstconnection');
   $phpdb = mysqli_connect(database_server,database_username,database_password,database_database);
?>