<?php

// What is class and instance
/*Class is blueprint/template. We can call it New Datatype out of which we can create variable which we call Instances/Object.  */
// Create Person class in Person.php
class Person{
    public $firstName;
    public $lastName;
    private $age;
    public static $counter=0;
    // Constructor function is executed as soon as instance of Class is created 
    public function __construct($firstname, $lastname)
    {
        // echo "Hello $firstname $lastname";
        //Instead of printing, its more relevant to save it in property of class. WE will use $this keyword which indicates to instance for which the constructor is called. Right now $person1.
        $this->firstName = $firstname;
        $this->lastName = $lastname;
        self::$counter++;
    }
    //For private property, we can't access them directly using instance of class. WE create getters & setters
    public function setAge($Age){
        $this->age = $Age;
    }
    public function getAge(){
        return $this->age;
    }
    public static function getCounter(){
        return self::$counter;
    }
}
$person1 = new Person('Brad', 'Traversy');
$person1->setAge(39);
echo '<pre>';
var_dump($person1);
echo '</pre>';

echo "Hello $person1->firstName $person1->lastName.<br>";
// echo "I am  $person1->age years old."; //cannot access private property Person::$age
echo "I am ". $person1->getAge() ." years old.<br>";

$person2 = new Person('John', 'Wick');
echo "The static counter member variable value is ". Person::$counter;
echo "<br>The static counter member variable value is ". Person::getCounter();

/*
    Static property & methods belong to Class not the instance.
    public static $counter = 0;
    Whenever instance is created, we increment counter.Instead of $this, for static class members(variables or functions), we use self, along with scope resolution operator ::. 

    What is -> in PHP?
    => Since PHP uses the dot(.) as a concatenation operator, it uses the arrow -> where most other languages would use a dot to access a property or method of an object. It’s technically called the “object operator” but most people call it the arrow (or “arrow operator” or, following JavaScript, the “single-arrow operator”)
*/

// Create instance of Person

// Using setter and getter