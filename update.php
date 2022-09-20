<?php
include('./db_config.php');
if($_SERVER['REQUEST_METHOD'] === "POST"){
 $Id=$_Get['id'];

$item = $_POST['todo'];
echo "<pre>";
print_r($_GET);
print_r($_POST);

echo "</pre>";
// echo "$item";
// echo "$Id";
$sql = "update todo_list set  ID=$Id , todo='$item' where ID=$Id";
$result = $conn -> query($sql);
header('location: ./index.php');

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
    <body>
     <h1 class="text-center">Update Todo</h1>
        <div class="container p-3">
         <form  method="post">
            <input type="text" class="form-control" name="todo" id=""  >
            <div class="d-grid gap-2 col-2 mx-auto">
            <button type="submit" class="btn btn-primary mt-3 ">Update</button>
            </div>
         </form> 
        </div> 
    </body>
</html>