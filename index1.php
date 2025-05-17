<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astract n Polymorphism</title>
</head>
<body>
    <h1>Polymorphism and Abstract</h1>
</body>
</html>

<?php
echo "<h1>ASTRACT PILLAR</h1>";
 abstract class  Animals{

   abstract public function Work();
     abstract public function sound();
     abstract public function color();

}

class Cat extends Animals{
    public function  Work()
    {
        echo "cat is a pet animal ";
    }

        public function  Sound()
    {
        echo "cat meaows ";
    }

        public function  color()
    {
        echo "cat is in different ";
    }
}

$cat = new Cat();
$cat->Work();

echo "<br>";
echo "<h1>POLYMORPHISM PILLAR</h1>";

class Students{

    public function StudentName(){
        echo "Manahil";
    }
}

class Student2 extends Students{

    public function StudentName(){
        echo "Saleha";
    }
}

class Student3 extends Students{

    public function StudentName(){
        echo "Manahil";
    }
}

class Student4 extends Students{

    public function StudentName(){
        echo "Omaima";
    }
}

// $Data = new Student2();
// $Data->StudentName();

$result = [new Student2() , new Student3() , new Student4()];

foreach($result as $value){
    $value->StudentName();
    echo "<br>";
}
?>