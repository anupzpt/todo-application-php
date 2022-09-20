<?php
include('./db_config.php');
if($_SERVER['REQUEST_METHOD'] === "GET"){
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
$Id=$_GET['id'];
    $sql= "delete from  todo_list where ID = $Id";
    $result = $conn -> query($sql);
    // mysqli_query($conn, $sql);
    header('location: ./index.php');
}
?>