<?php
// 1.Creating a class(A class is used to create methods alonside categoeising our codes)
class NewClass{
// properties and methods that are related to the class go here(fuction)
     public $info = "This is some info";
}
// // Creating an object with information regarding a class(Creating a variable(calling the function))-Ectanciating a class
$object = new NewClass;
// // to output the contents of a class use the function below
var_dump($object);

// 2. Visibility and inheritance
// i.Visibility
 class person{
     // properties (similar to variables)
    protected $first = "Daniel";
     private $last = "Nelson";
    private $age = "28";
 }

// ii.To inherit a method from one class to another we use extends alongside protected keyword
 class Pet extends person{
    // method(similar to fuction)
   public function owner(){
        $a =$this->first;
        return $a;
         }
 }

// 3. Methods and properties in php
class child{
    // properties
   public $second ;
   public $eyecolor;
   public $age;

   //methods
   public function newName($second){
    $this->second = $second;
   }
}

// 4.Constructors and destructors
class adult{
   public $third ;
   public $eye;
   public $newage;
    
//    i.constructor
   public function __construct($third, $eye, $newage){
    $this->third=$third;
    $this->eye=$eye;
    $this->newage=$newage;
   }

   public function newAdult($third){
    $this->third = $third;
   }
// retuning a private property using a public method
public function getAge(){
 return $this->newage;
}
}
// 5.Static methods and obejects
// properties
class student{
   private $username;
   private $color;
   private $num;

   // static property
   public static $drinkingAge = 18;

  
   public function __construct($username, $color, $num){
    $this->username=$username;
    $this->color=$color;
    $this->num=$num;
   }
// methods
public function setUser($username){
   $this->username=$username;
}

public function getDa(){
   return self::$drinkingAge;
}

// static method
public static function setNewDrinkingAge($newDa){
   self::$drinkingAge=$newDa;

}
}
 ?>