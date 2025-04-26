<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #aabbd3;
      font-family: 'Segoe UI', sans-serif;
    }
    .form-container {
      background-color: #0e1118;
      color: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
      max-width: 400px;
      margin: 80px auto;
      border: 1px solid #4b5563;
    }
    .form-control, .form-select {
      border-radius: 10px;
    }
    .btn-group .btn {
      border-radius: 10px;
    }
    .form-check-label {
      color: #e5e7eb;
    }
    .btn-hover:hover {
    background-color: #d3d3d3; /* Slightly darker on hover */
    color: #000;
    box-shadow: 0 4px 8px rgba(146, 30, 30, 0.1); /* Soft shadow */
    transition: all 0.3s ease;
  }
    
</style>

</head>
<body>
   <a href = "select2.php" class = "btn btn-dark"> See all user_details</a>
  <div class="form-container">
    <h3 class="mb-1">Login Your Account</h3>
    <p class="mb-4 text-secondary" style="font-size: 0.9rem;">Fill in the data below.</p>

    <form method = "post">
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter your name " name = "name">
      </div>

      <div class="mb-3">
        <input type="email" class="form-control" placeholder="Enter your email" name = "email">
      </div>

      <div class="mb-3">
        <input type="number" class="form-control" placeholder="Enter your CNIC No" name = "cnic">
      </div>

      <div class="mb-3">
        <input type="number" class="form-control" placeholder="Enter your Phone number" name = "phone">
      </div>

      <div class="mb-3">
        <textarea placeholder = "Enter your address" class="form-control mb-2 " name = "address"></textarea>
      </div>
        <button class = "btn btn-light w-100" name = "btn_login">Login</button>
</body>

</head>
</html>

<?php
include('db.php');

if(isset($_POST['btn_login'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    

    $query = "INSERT INTO user_details (name , email , CNIC , phone , address )
    values ('$name' , '$email' , '$cnic' , $phone ,'$address')";

    $go = mysqli_query($result, $query);

    if($go){
        echo "<script>alert('Data inserted into table successfully')</script>";
    }
}

?>
