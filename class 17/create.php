<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<style>
h1{
     text-align: center;
     font-family: "Time New Roman";
     color:black;
    }
</style>    
<body>
    <a href = "select.php " class = "btn btn-dark">View All Users </a>
<section class = "container">
    <div class = "row justify-content-center">
            <div class = "col-4">
                <h1 >Create</h1>
                <form method = "post">
                    <label class="text-center d-block"><i>Enter your full name:</i></label>
                    <input type="text" class = "form-control mb-2 border-info" name = "name">
                    <label class="text-center d-block"><i>Enter your email:</i></label>
                    <input type="email" class = "form-control mb-2 border-info" name = "email">
                    <label class="text-center d-block"><i>Enter your CNIC:</i></label>
                    <input type="text" class = "form-control mb-2 border-info" name = "cnic">
                    <label class="text-center d-block"><i>Enter your contact:</i></label>
                    <input type="number" class = "form-control mb-2 border-info" name = "contact">
                    <label class="text-center d-block"><i>Enter your address:</i></label>
                    <textarea name="address" class="form-control mb-2 border-info" ></textarea>
                    <button class="btn btn-info w-100" name="btn_create">Create</button>

                </form>
            </div>
        </div>
    </section>
</body>
</html>
<?php

include('db.php');
if(isset($_POST['btn_create'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $query = "INSERT INTO user_data(name , email , CNIC , contact , address) 
    values ('$name' , '$email' , '$cnic' , $contact , '$address')";

    $go = mysqli_query($result , $query);

    if($go){
        echo "<script>alert('Data inserted into database successfully')</script>";
    }
}



?>