<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>$_FILES METHOD </h1>


    <section class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 align ="center">File Upload</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="file" class="form-control mb-2" name="file">
                <button class="btn btn-dark" name="btn_upload">upload the File</button>
            </form>
        </div>
    </div>

<?php

if(isset($_POST['btn_upload'])){
$file_name = $_FILES['file']['name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];

}
if(move_uploaded_file($tmp_name,$file_name)){
    "echo <p>Your file is uploaded successfully</p>";
    echo "<img src='screenshots/".$file_name."' width='50%'>";
    echo "<br>";
}
 else{
    echo "<p>File not found</p>";
 }
 $allow_type = ['image/png' , 'image/jpg' , 'image/jpeg'];

 if(in_array($file_type,$allow_type)){
     $location = "screenshots/";
 }

// else{
// echo "Error: upload only this types of files (png, jpg and jpeg)";
// }
echo $file_name;
echo "<br>";
echo $file_size;
echo "<br>";
echo $file_type;
echo "<br>";
echo $tmp_name;



?>


</body>
</html>