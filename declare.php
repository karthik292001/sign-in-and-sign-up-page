<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db_name = "user verification";
 $conn = mysqli_connect($servername,$username,$password,$db_name);
 if(!$conn){
   die("ERROR: could not connect.". mysqli_connect_error());
 }
?>