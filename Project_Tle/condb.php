<?php

   $server = 'localhost';
   $username = 'root';
   $password = '';
   $dbname = 'test_php';

   $conn = new mysqli($server, $username, $password, $dbname);

   if($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
   } else {
    echo "Hello Tle";
   }

?>