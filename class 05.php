<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
</head>
<body>
    <h1>Functions in PHP:</h1>
    <img src="screenshots/functions.PNG" alt="function">
    <p>There are two types of function:</p>
 <ul>
       <li> buitin function </li>
       <li> user defined function</li>
</ul>
    <h1>Built in functions in PHP:</h1>
    <img src=" screenshots/builtin.PNG" alt="gg">
    <h1> User-defined functions in PHP:</h1>
    <img src=" screenshots/userdefined.PNG" alt="hh">
</body>
</html>

<?php

//simple function

echo "<h1>Functions in PHP:</h1>";

function my_messege(){
    echo "hello world";
}
my_messege();
 
//parameter

echo "<h1>Parameter-functions in PHP:</h1>";

function para($num1 , $num2){
 echo $num1+$num2;
}
para(23,23);

echo "<br>";
echo "<br>";

function student_data($name ,$class ,$email ,$rank){
 echo "Name:".$name;
 echo "<br>";
 echo "Class:".$class;
 echo "<br>";
 echo "Email:".$email;
 echo "<br>";
 echo "Rank:".$rank;
}

student_data("Shayan","3rd year","shayan@gmail.com","A-one");

echo "<br>";

echo "<h1>Return Keyword with parameter-function:</h1>";

function sum($n1 ,$n2){
 $result = $n1+$n2;
 return $result;
 }
 echo "5 + 10 =". sum(5,10). "<br>";
 echo "6 + 91 =". sum(6,91). "<br>";
 echo "4 + 41 =". sum(4,41). "<br>";
 echo "3 + 97 =". sum(3,97). "<br>";
 echo "45 + 45 =". sum(45,45);

 echo "<br>";

 echo "<h1>Call-back function in PHP:</h1>";

 function msg(){
    echo "hello moto";
 
 }
 echo "<br>";
 function motrola(){
    echo "Android motrola";
    echo "<br>";
    msg();
 }
 motrola();
 
?>