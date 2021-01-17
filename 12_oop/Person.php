<?php 
 class Person
 {
     public $firstName;
     public $lastName;
     protected ?int $age;
     public static $counter = 0;
 
     public function __construct($fname, $lname)
     {
         $this->firstName = $fname;
         $this->lastName = $lname;
         self::$counter++;
     }
     public function setAge($age)
     {
        $this->age = $age;
     }
     public function getAge()
     {
         return $this->age;
     }
     public static function getCounter()
     {
         return self::$counter;
     }
 }
 $person1 = new Person('John', 'Cena');
 $person1->setAge(null);
//  echo '<pre>';
//  var_dump($person1);
//  echo '</pre>';
  $counterParent = Person::$counter;
  $counterParent = Person::getCounter();
  
  echo "<br>After parent class instance, Contructor ran $counterParent times <br>";
?>