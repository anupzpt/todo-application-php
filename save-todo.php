<?php
//include ma error aaye warning dekhaucha ani tala ko code run huncha
include('./db_config.php');
// require('./db_config.php'); 
//require ma error aayo bhane stop huncha
if($_SERVER['REQUEST_METHOD'] === "POST"){
echo "<pre>";
print_r($_POST);
echo "</pre>";

$todo_item = $_POST['todo'];
// echo "You have entered "  .$todo_item . " to the list.";
// specific ` ` use garni 1 ko side mah xa

$sql = "Insert into todo_list(`Title`) values('$todo_item')";
$result = $conn -> query($sql);
// redirecttag header leh kam sidyaxi redirect garxa
header('location: ./index.php');
}
?>