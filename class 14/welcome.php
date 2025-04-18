<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welocome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
<?php
session_start();
 
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
?>
<h1>Welocome<?php echo " ".$_SESSION['user']?></h1>
<a href = "logout.php" class = "btn btn-danger">Logout</a>
</body>
</html>

 