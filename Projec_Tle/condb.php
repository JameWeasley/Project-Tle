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

   $sql = "SELECT * FROM user";
   $result = $conn->query($sql);

   if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo 'ID: ' . $row['id']. "<br>" . 'ชื่อกูเองชื่อว่า: ' . $row['name'];
    }
   } else {
    echo '0 !';
   }

   $conn->close();

?>