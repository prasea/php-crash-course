<?php

// Declaring numbers
    $a = 5;
    $b = 4;
// Arithmetic operations
    echo $a + $b.'<br>';
    echo $a - $b.'<br>';
    echo $a * $b.'<br>';
    echo $a / $b.'<br>';
    echo $a % $b.'<br>';
// Assignment with math operators
    echo '<h1> Using Shorhand arithmetic Operators</h1>';
    // $a += $b; echo $a; //9
    // $a -= $b; echo $a; //1
    // $a *= $b; echo $a; //20
    // $a /= $b; echo $a; //1.25
    $a %= $b; echo $a; //1
// Increment operator.
#In post increment, value will be printed then only increment will occur
    echo '<h1>Increment/Decrement Operators</h1>';
    $c = 2;
    echo 'Value before increment is '.$c.'<br>';
    echo 'Post-increment '.$c++.'<br>';
    echo 'After post-increment '.$c.'<br>';
    echo 'Pre-increment '.++$c.'<br><br><hr>';
// Decrement operator
    echo 'Value before decrement is '.$c.'<br>';
    echo 'Post-decrement '.$c--.'<br>';
    echo 'After post-decrement '.$c.'<br>';
    echo 'Pre-decrement '.--$c.'<br>';
// Number checking functions
    is_float(3.3); //true
    is_double(3.3); //true
    is_int(3); //true
    is_numeric("3.33"); //true
    is_numeric("3g.33"); //false
// Conversion of String to Int/float
    $strNumber = '12.34';
    $intNumber = (int)$strNumber; #casting
    $intNumber2 = intval($strNumber);
    $floatNumber = (float)$strNumber; #casting
    $floatNumber2 = floatval($strNumber);

    var_dump($intNumber, $intNumber2, $floatNumber, $floatNumber2);
    echo '<br><hr>';
// Number functions: Used when working with Numbers
    echo "abs(-10): ".abs(-10).'<br>';
    echo "pow(2,3): ".pow(2,3).'<br>';
    echo "sqrt(256): ".sqrt(256).'<br>';
    echo "max(-1,2,3): ".max(-1,2,3).'<br>';
    echo "min(-1,2,3): ".min(-1,2,3).'<br>';
    echo "round(2.4): ".round(2.4).'<br>';
    echo "round(2.6): ".round(2.6).'<br>';
    echo "floor(2.9): ".floor(2.9).'<br>';
    echo "ceil(2.1): ".ceil(2.1).'<br>';
    echo "rand(1,10): ".rand(1,10).'<br>';
// Formatting numbers: number_format — Format a number with grouped thousands
    $unformattedNumber = 123456789.123456;
    #$formattedNumber = number_format(The number being formatted, Sets the number of decimal points, Sets the seperator for the decimal point, Sets the thousands seperator);
    $formattedNumber = number_format($unformattedNumber, 3, '.', ',');
    echo $formattedNumber;    

// https://www.php.net/manual/en/ref.math.php
