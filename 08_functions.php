<?php

// Function which prints "Hello I am Zura"

// Function with argument

// Create sum of two functions

// Create function to sum all numbers using ...$nums
    // function sum(...$nums){ #...$nums: Take out all supplied arguments and save it in $nums as Array.
    //     $sum = 0;
    //     // for($i=0; $i<count($nums); $i++){
    //     //     $sum += $nums[$i];
    //     // }
    //     foreach($nums as $num){
    //         $sum += $num;
    //     }
    //     return $sum;
    // }
    // echo sum(1,2,3,4,5);

// Arrow functions
    echo '<a href="https://www.php.net/manual/en/function.array-reduce.php" target="_blank">array_reduce</a><br>';
    echo "<h1>array_reduce — Iteratively reduce the array to a single value using a callback function</h1>";
    
    // function sum(...$nums){
    //     $sum = array_reduce($nums, function($carry, $n){
    //         return $carry + $n;
    //     }, 10);
    //     return $sum;
    // }
    function sum(...$nums){
        $sum = array_reduce($nums, fn($carry, $num)=>$carry+$num);
        return $sum;
    }
    echo sum(1,2,3,4,5);