<?php

$age = 20;
$salary = 300000;

// Sample if
    if($age == 20){
        echo 'Age is 20'. '<br>';
    }
// Without circle braces
    if($age == 20) echo 'Age is 20'. '<br>';
// Sample if-else
    if($age == 20){
        echo 'Age is 20'. '<br>';
    } else{
        echo 'Age is not 20'. '<br>';
    }
// Difference between ==(Just value) and ===(Compares both values & types)
    $age == 20; //true
    $age == '20'; //true

    $age === 20; //true
    $age === '20'; //false
// if AND
    if($age == 20 && $salary == 300000){
        echo 'Age is 20 AND salary is 300000'. '<br>';
    }
// if OR
    if($age == 20 || $salary == 300000){
        echo 'Either age is 20 OR salary is 300000'. '<br>';
    }
// Ternary if ?:
    echo $age >= 20 ? 'Old' : 'Young';
    echo '<br>';    

// Short ternary, to check if variable has value otherwise assign custom value
    $myAge = $age ?: 18;
    echo $myAge; #20 Since $age is set to 20. But if we change $age=0 which is falsable value, So $myAge = 18. Thus if age exist, assign that age to $myAge else assign 18 to $myAge.

// Null coalescing operator. Relatively new but Handy.
#To check if variable is declared or Not    
    // $myName = isset($name) ? $name : 'Jane';    
    $myName = $name ?? 'Jane';
    echo $myName; #Jane b/c we don't have $name declared. 

// switch
    $userRole = 'ad'; //editor, user, admin
    switch($userRole){
        case 'admin':
            echo 'admin'. '<br>';
            break;
        case 'editor':
            echo 'editor'. '<br>';
            break;
        case 'user':
            echo 'user'. '<br>';
            break;
        default:
            echo 'Treespassers'. '<br>';
            break;
    }