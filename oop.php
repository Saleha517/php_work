<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
     <h1> OOP </h1>
     <h3>Object-Oriented Programming</h3>
</body>
</html>
<?php
class Books{
    public $subj;
    public $price;
    public $class;


     public function bbookkss(){
        return "<br> <br>  Book subject is".$this->subj."<br>Book price is".$this->price."<br> This book for class".$this->class;
    }
}


echo "<br>";

$object = new Books();
echo $object->subj = "Physics"."<br>";
echo $object->price = "450"."<br>";
echo $object->class = "10";



    echo $object->bbookkss();
?>