<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$ SESSION METHOD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<style>
    h2{
        text-align : center;
    }
</style>
<body>
<section class = "container">
    <div class = "row justify-content-center">
        <div class = "col-4">
          <h2 style="font-family: Times New Roman">Login Your Account</h2>
            <form method = "post">
                <input type="text" placeholder = "Enter your username" class = "form-control mb-2" name = "username">
                <input type="password" placeholder = "Enter your password" class = "form-control mb-2" name = "password">

                <button class = "btn btn-secondary w-100" name = "btn_login">Login</button>
            </form>
        </div>
    </div>
</section>
</body>

<?php
 session_start();
if(isset($_SESSION['user'])){
    header("lpcation:welcome.php");
}
else{
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "saleha" && $password == "chemistry123" || $username == "admin" && $password = "mypass123"){
        echo "<h3>Login Successfully</h3>";

        $_SESSION['user'] = $username;
        header ("location:welcome.php");
    }

    else{
        echo "<script>alert('Invalid username or password')</script>";
    }
 }
}

?>
</html>