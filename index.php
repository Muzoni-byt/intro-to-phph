<?php
// non-automatic loader
require 'includes/newclass.inc.php';

// automatic loader
spl_autoload_register('myAutoload');

function myAutoload($classname){
    // path with the files
    $path = "includes/";
    $extenstion = ".inc.php";
    $fullpath = $path . $classname . $extenstion;

    // error handling
    if(!file_exists($fullpath)){
        return false;
    }

    include_once $fullpath;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //2. Visibility and inheritance
    $pet01 = new Pet();

     echo $pet01->owner()."<br>";

    // 3.methods and properties.
    // object creation from class
    $child1= new child();
    $child1->newName("Daniel");
    echo $child1->second."<br>";

    $child2= new child();
    $child2->newName("Timmy");
    echo $child2->second. "<br>";

    // 4.Constructors and destructor
    // i.constructors to output a property
     $adult1 = new adult("Mercy", "Grey", 21);
     echo $adult1->third."<br>";
     echo $adult1->eye."<br>";
     echo $adult1->newage."<br>";

    //  to output a method
    $adult1->newAdult("Muthoni");
    echo $adult1->third."<br>";

    // retuning a private property using a public method
     echo $adult1->getAge()."<br>";

    //  5.static properties and methods
    // property
    echo student :: $drinkingAge."<br>";

    // method
    student :: setNewDrinkingAge(21);
    echo student :: $drinkingAge."<br>";

    // accessing properties and methods from nonstatic methods and properties
    $student1 = new student("Vincent", "blue", 22);
    echo $student1->getDA();

    ?>

   
</body>
</html>