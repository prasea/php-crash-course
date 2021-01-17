<?php 
 require 'Person.php';
 class Student extends Person
 {
    //Adding new unique property to Student
    public $studentId;

    public function __construct($fname, $lname, $sid)
    {
        $this->studentId = $sid;
        parent::__construct($fname, $lname);
    }
    public function setAge($age){
        parent::setAge($age);
    } 

    public function getBirthYear($age)
    {    
        return date('Y') - $age;      
    } 

 } 
 $student1 = new Student('Haris', 'Bahadur', 321);
 $student1->age = 21;
//  echo $student1->getBirthYear(32);
$counterChild = Student::$counter;

echo "<br>After child class instance, Contructor ran $counterChild times <br>";
 echo '<pre>';
 var_dump($student1);
 echo '</pre>';
?>