<?php

// Create simple string
    $name = 'Jane';
    $string = 'Hello I am '.$name.'. I am 19 years old';
    $string = 'Hello I am $name. I am 19 years old';
    $string2 = "Hello I am $name. I am 19 years old"; 
    echo $string.'<br>';
    echo $string2.'<br>';
#Difference b/w String in Single & Double quotations is that inside " ", if we have any variable, it will be evaluated. But for ' ', it will not evaluate the variable and just print the variable name;

// String concatenation: dot
    echo 'Hello '.'world '.' and Php'.'<br>';    

// String functions
    $str = "        Hello World     ";
    echo "strlen($str): ".strlen($str). '<br>';
    echo "trim($str): ".trim($str). '<br>';
    echo "strlen(trim($str)): ".strlen(trim($str)). '<br>';
    echo "ltrim($str): ".ltrim($str). '<br>';
    echo "rtrim($str): ".rtrim($str). '<br>';
#The reason we can't visualize the difference of trim(), ltrim() & rtrim() is HTML ignores Whitespaces
    echo "str_word_count($str): ".str_word_count($str). '<br>';
    echo "strrev($str): ". strrev($str). '<br>';
    echo "strtoupper($str): ". strtoupper($str). '<br>';
    echo "strtolower($str): ". strtolower($str). '<br>';
    echo "ucfirst('hello'): ". ucfirst('hello'). '<br>';
#UpperCaseFirst - ucfirst(): Make a String's first character uppercase    
    echo "lcfirst('HELLO'): ". lcfirst('HELLO'). '<br>';
#LowerCaseFirst - lcfirst(): Make a String's first character lowercase.    
    echo "ucwords('hello world and php): ". ucwords('hello world and php'). '<br>';
    echo "strpos($str, 'world'): ". strpos($str, 'world') .'<br>';    
    echo "stripos($str, 'world'): ". strpos($str, 'world') .'<br>';    
    echo "substr($str, 8, 6): ". substr($str, 8, 6). '<br>';
    echo "str_replace('World', 'PHP', $str): ". str_replace('world', 'PHP', $str) . '<br>';
#IN our $str, we don't have world, we have World i.e. case-sensitive. For str_ireplace(), we don't have to worry whether W or w. 
    echo "str_ireplace('World', 'PHP', $str): ". str_ireplace('World', 'PHP', $str) . '<br>';
    echo "str_ireplace('World', 'PHP', $str): ". str_ireplace('world', 'PHP', $str) . '<br>';

// Multiline text and line breaks
    echo "<h1>&lt;pre&gt; in php is achieved using nl2br()</h1>";
    $longText = "
        Hello, my name is Prajanya.
        I am taking PHP crash course from Zura.
        His Pseudo name is Codeholic.
        He is 27 years old.
    ";
    echo $longText. '<br>';
    echo nl2br($longText);
// Multiline text and reserve html tags
    $longText2 = "
        Hello, my name is <b>Prajanya</b>.
        I am taking PHP crash course from Zura.
        His Pseudo name is <b>Codeholic.</b>
        He is 27 years old.
    ";
    echo $longText2. '<br>';
    echo nl2br($longText2). '<br>';
    echo htmlentities($longText2). '<br>';
    echo nl2br(htmlentities($longText2)). '<br>';
    echo html_entity_decode('&lt;b&gt; Zura &lt;/b&gt;');
#htmlentitities() reserves the HTML tags and displays them as it is without parsing.    
// https://www.php.net/manual/en/ref.strings.php