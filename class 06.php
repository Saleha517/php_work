<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception handling</title>
</head>
<body>
     <h1>PHP Exception Handling:</h1>
     <img src="screenshots/error handling.PNG" alt="ss">
     <h1>Exception Handling Methods:</h1>
     <img src="screenshots/methods.PNG" alt="">
</body>
</html>
<?php
echo "<br>";
echo "<br>";
function sayhello(){
    echo "Hello World";
}

function MyCallBack(){
    sayhello();
    echo "This is a Call back Function";
}

MyCallBack();

echo "<br>";

function display(){
    echo "This is display Function";
}

function callBack($call){
    $call();
}
callBack('display');
?>
<?php
echo "<br>";
echo "<br>";
echo "<h1>Error/Exception Handling </h1>";
echo '<img src="screenshots/try.PNG" alt="My Image" />';
echo "<br>";
echo "<br>";
try{
    $num1 = 9;
    $num2 = 0; 
    if($num2 == 0){
        throw new Exception("Can't Divide by zero");
    }
    echo $num1/$num2;
}
catch(Exception $e){
    echo "Error: ".$e->getMessage();
}

echo "Hello World";
echo "<br>";


function checkNum($num){
    try{
        if($num < 0 ){
            throw new Exception("This is Neagtive Number");
        }
        elseif($num == 0){
            throw new Exception("This is  zero");
        }

        echo  $num." This is Positive Number";
    }
    catch(Exception $error){
        echo "Error: ".$error->getMessage();
    }
}

checkNum(-100);




$sayHello = function(){
    echo "This is  Variable function";
};
$sayHello();
echo "<br>";
echo "<br>";

?>
