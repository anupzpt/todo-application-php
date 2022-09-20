<?php
   $conn= new mysqli("localhost:3306","root","","todo");
   if($conn->connect_error){
    die($conn->connect_error);
   }
   // echo "DB connect success" ."<br>";
?>