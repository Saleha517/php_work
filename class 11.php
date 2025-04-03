<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>
<body>
    <h1>Multidimensional Array in PHP</h1>
    <img src="screenshots/multidimen.PNG" alt="ll">
</body>
</html>
<?php
echo "<br>";

echo "<h1>Multidimensional Array in Indexed Array:</h1>";

$array_multi = [
 
         ["Manahil" , "71"],
         ["Saleha" , "72"],
         ["Bisma" , "200"]

];
echo "<br>";
foreach($array_multi as $value){
    foreach($value as $data){
       echo  $data . "<br>";
    }
}

echo "<br>";

echo "<h1>Multidimensional Array in Associative Array & print with nested foreach loop:</h1>";



$students = [
    "Soyoug" => ["Math" => 67, "Chemistry" => 56, "Biology" => 88],
    "Neon" => ["Math" => 89, "Chemistry" => 80, "Biology" => 89],
    "Namra" => ["Math" => 51, "Chemistry" => 67, "Biology" => 94]
];

foreach ($students as $student_name => $subjects) {
    echo "Student: $student_name.<br><br>";
    
    foreach ($subjects as $subject => $marks) {
        echo "$subject: $marks<br>";
    }
    
    echo "<br>";
}
?>











