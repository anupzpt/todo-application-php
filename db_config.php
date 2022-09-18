<?php
   $conn= new mysqli("localhost:3307","root","","todo");
   if($conn->connect_error){
    die($conn->connect_error);
   }
   echo "DB connect success" ."<br>";
?>