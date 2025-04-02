<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop n sort </title>
</head>
<body>
<h1>Sort in PHP:</h1>
<img src="screenshots/sort.PnG" alt="">
</body>
</html>

<?php

echo "<br>";
echo "<br>";
echo "<br>";

 $s = ["Biology" , "Chemistry" , "Science" , "Physics" , "Urdu" , "Maths"];
 var_dump($s);

 echo "<br>";
 echo "<br>";

 sort($s);
 var_dump($s);

 echo "<br>";
 echo "<br>";
 echo "<br>";

 $mard_ka_chakkar = ["manhail" , "ka " , "vo" , "call" , "nhi " , "otha" , "rha"];
 rsort($mard_ka_chakkar);
 var_dump($mard_ka_chakkar);

 echo "<h1>For Each Loop in associative array:</h1>";

 $m = ["name" => "shayan", "cast" => "Malik" ,"Age" => "20" ,"Education" => "Graduation"];

 echo "<ul>";
 foreach($m as $key => $value){
 echo "<li>".$key.  " :" .$value."</li>";
 }
 echo "</ul>";

 echo "<h1>Foreach in indexed array </h1>";

 $for = ["manahil" , "saleha" , " teacher" , "gahazala" , "bisma"];

 echo "<ul>";
 foreach($for as $value){
    echo "<li>$value</li>";
 }
 echo "</ul>";
?>