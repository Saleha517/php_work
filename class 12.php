<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

</head>
<body>
    <h1>Global Variables in PHP</h1>
    <img src="screenshots/global.PNG" alt="lll">
    <h2> $_GET in PHP:</h2>
    <img src="screenshots/methods.PNG" alt="">


<section class="container">
    <div class="row">
        <div class="col-6">
            <form method="get">
                <h1 align="center">Fill The Form($_GET)</h1>
                <input type="text" placeholder="Enter Your Name" class="form-control mb-3" name="username">
                <input type="text" placeholder="Enter Your Email" class="form-control  mb-3" name="email">
                <input type="text" placeholder="Enter Your Phone No." class="form-control  mb-3" name="phone">
                <input type="password" placeholder="Enter Your password" class="form-control  mb-3" name="password">
                <button class="btn btn-dark w-100" name="btn_submit">Submit</button>
            </form>
        </div>
    </div>
</section>


<?php
if(isset($_GET['btn_submit'])){
    $name = $_GET ['username'];
    $email = $_GET ['email'];
    $phone = $_GET ['phone'];
    $password = $_GET ['password'];

  
    echo $name."<br>";
    echo $email."<br>";
    echo $phone."<br>";
    echo $password."<br>";
}

 echo "<br>";
?>

<h1>$_POST in PHP </h1>
 <img src="screenshots/post.PNG" alt="">
<section class="container">
    <div class="row">
        <div class="col-6">
            <form method="post">
                <h1 align="center">Fill The Form ($_POST)</h1>
                <input type="text" placeholder="Enter Your Name" class="form-control mb-3" name="username">
                <input type="text" placeholder="Enter Your Email" class="form-control  mb-3" name="email">
                <input type="text" placeholder="Enter Your Phone No." class="form-control  mb-3" name="phone">
                <input type="password" placeholder="Enter Your password" class="form-control  mb-3" name="password">
                <button class="btn btn-dark w-100" name="btn_submit">Submit</button>
            </form>
        </div>
    </div>
</section>
<?php
if(isset($_POST['btn_submit'])){
    $name = $_POST['username'];
    $emaill = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    echo $name."<br>";
    echo $emaill."<br>";
    echo $phone."<br>";
    echo $password."<br>";
}
?>
</body>
</html>