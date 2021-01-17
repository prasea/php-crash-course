<?php
/*
// Create array
    $fruits = ["Apple", "Banana", "Orange"];
// Print the whole array
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';
// Get element by index
    echo $fruits[1].'<br>';
    // echo $fruits[3].'<br>'; //error

// Set element by index
    $fruits[0] = "Litchi"; //Replaces Apple with Litchi at first Index
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

// Check if array has element at index 2
    isset($fruits[2]); //true
    isset($fruits[3]); //false

// Append element
    $fruits[] = "Apple";
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

// Print the length of the array
    echo count($fruits). '<br>';

// Add element at the end of the array
    array_push($fruits, 'foo');
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

// Remove element from the end of the array
    echo array_pop($fruits). ' Popped out'. '<br>';

// Add element at the beginning of the array
    array_unshift($fruits, 'foo');
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

// Remove element from the beginning of the array
    echo array_shift($fruits). ' shifted from front';
    
    echo '<h2> explode("delimiter", $string) & implode("glue", $array)</h2>';
// Split the string into an array
    $str = "1,2,3";
    $strToArray = explode(",", $str);
    echo '<pre>';
    var_dump($strToArray);
    echo '</pre>';

// Combine array elements into string
    $arr = [1,2,3];
    $arrToString = implode(" & ", $arr);
    echo '<pre>';
    var_dump($arrToString);
    echo '</pre>';

// Check if element exist in the array
    $exists = in_array('Mango', $fruits);
    echo '<pre>';
    var_dump($exists);
    echo '</pre>';

// Search element index in the array Not just if the element is in Array    
    echo '<pre>';
    var_dump($fruits);
    // var_dump(array_search('Mango', $fruits));
    var_dump(array_search('Apple', $fruits));
    echo '</pre>';

// Merge two arrays
    $vegetables = ["Pumpkin", "Potato"];
    echo '<pre>';
    // var_dump(array_merge($fruits, $vegetables));
#Better way to merge two arrays: Spread Operator    
    var_dump([...$fruits, ...$vegetables]);
    echo '</pre>';

// Sorting of array (Reverse order also)
    echo '<h2>Before Sorting</h2><pre>';
    var_dump($fruits);
    echo '</pre>';
    sort($fruits);
    echo '<h2>After Sorting</h2><pre>';
    var_dump($fruits);
    echo '</pre>';

    rsort($fruits);
    echo '<h2>Reverse Sort</h2><pre>';
    var_dump($fruits);
    echo '</pre>';
*/
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
    $person = [
        'firstName' => 'Brad',
        'lastName' => 'Traversy',
        'age' => 30,
        'hobbies' => ['Content creation', 'Video Games', 'Music']
    ];
    echo '<pre>';
    var_dump($person);
    echo '</pre>';

// Get element by key
    echo $person['firstName']. ' Loves '. $person['hobbies'][2]. '.<br>';

// Set element by key
    $person['channel'] = 'TraversyMedia';
    echo '<pre>';
    var_dump($person);
    echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
    // if(!isset($person['address'])){
    //     $person['address'] = 'unknown';
    // }
    $person['address'] = 'Damak';
    // $person['address'] = $person['address'] ?? 'unknown';
    $person['address'] ??= 'unknown';
    echo '<pre>';
    var_dump($person);
    echo '</pre>';

// Check if array has specific key
        echo '<pre>';
        var_dump(isset($person['firstName'])); #true
        var_dump(isset($person['firstName '])); #Whitespace false
        echo '</pre>';

// Print the keys of the array
    echo '<pre>';
    var_dump(array_keys($person));
    echo '</pre>';

// Print the values of the array
        echo '<pre>';
        var_dump(array_values($person));
        echo '</pre>';

// Sorting associative arrays by values asort($array), by keys ksort($array);
    asort($person);
    echo '<pre>';
    var_dump($person);
    echo '</pre>';


// Two dimensional arrays
    $todos = [
        ['title' => 'Todo 1', 'status' => 'completed'],
        ['title' => 'Todo 2', 'status'=> 'Not completed']
    ];
    echo '<pre>';
    var_dump($todos[1]['title']);
    echo '</pre>';