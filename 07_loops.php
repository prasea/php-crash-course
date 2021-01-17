<?php

// while

// Loop with $counter

// do - while

// for
for($i=0;$i<10; $i++){
    echo "$i. Hello World<br>";
}
// foreach
$fruits = ["Apple", "Banana", "Orange"];
foreach($fruits as $i=>$f){
    echo "$i. $f<br>";
}

// Iterate Over associative array.
$person = [
    'firstName' => 'Brad',
    'lastName' => 'Traversy',
    'age' => 38,
    'hobbies' => ['Youtube', 'VideoGames', 'Tennis'],
];
foreach($person as $key=>$value){  
    if(is_array($value)){
        echo $key.'=>'.implode(',', $value).'<br>';
    } else{
        echo $key.'=>'.$value.'<br>';
    }
}
