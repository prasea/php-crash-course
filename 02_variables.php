<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float/Double
    Boolean
    Null
    Array 
    Object
    Resource
*/
// Declare variables. Use $ before Identifier to declare variable in PHP which is dynamically typed.
    $name = 'Jonas';
    $age = 24;
    $height = 5.9;
    $hasKids = false;
    $salary = null;

// Print the variables. Explain what is concatenation
#Way of placing variables & Strings together. In PHP we use dot(.) for concatenation
    echo $name.'<br>';
    echo $age.'<br>';
    echo $height.'<br>';
    echo $hasKids.'<br>';
    echo $salary.'<br>';
/*
    $hasKids is true but it Prints 1. Boolean is converted into string when we try to print that boolean variable. true is converted into '1' and false is converted into Empty String ''
    Also $salary is null which is converted into Empty String '' when we try to print it on screen
*/
    echo $salary.'<br>';
// Print types of the variables: gettype()
    echo '<h1> gettype() </h1>';
    echo gettype($name).'<br>';
    echo gettype($age).'<br>';
    echo gettype($height).'<br>';
    echo gettype($hasKids).'<br>';
    echo gettype($salary).'<br><br>';

// Print the whole variable: var_dump(), useful for debuggin purpose to see what variable holds.
    var_dump($name, $age, $height, $hasKids, $salary);

// Change the value of the variable
    $hasKids = true;

// Print type of the variable
    echo '<br><br>'.$hasKids.'<br>';

// Variable checking functions
    $output;
    $output = is_string($name); //true
    $output = is_int($height); //false which will be printed as Empty String
    $output = is_bool($hasKids); //true
    $output = is_double($height); //true
    echo 'output='.$output.'<br>';

// Check if variable is defined
    echo '<h1> isset() </h1>';
    echo isset($name); //true
    isset($address); //false

// Constants:In PHP we have to use function define() to define a constant
    echo '<h1>define() Constants</h1>';
    define('PI', 3.1415);
#To access constant, no need for $. 
    echo PI.'<br>';

// Using PHP built-in constants
    echo SORT_ASC.'<br>';
    echo PHP_INT_MAX.'<br>';