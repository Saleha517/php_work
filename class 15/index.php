<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout page</title>
</head>
<body>
</body>
</html>
<?php
session_start();

session_destroy();
header("location:loginform.php");
?>