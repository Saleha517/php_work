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

echo "<h1>Multidimensional Array in Associative Array:</h1>";

$employes = [
    "office" => ["Name" => "John" ,"Age" => 45 , ],
    "canteen" => ["Name" => "Akbar" , "Age" => 68 ],
    "Driver" => ["Name" => "Asgher" , "Age" => 90]
    
];

foreach($employes as $key => $data){
    echo "<br>";
    foreach($data as $employes){
        echo $key."-----".$employes."<br>";
    }
}
















// foreach($employes as $department => $staff){
//     echo ": $department\n"."<br>";
//     echo "<br>";
//     foreach($staff as $employes){
//         echo $employes;
//     }
// }



?>