<?php

// Print current date
    date_default_timezone_set('Asia/Kathmandu');
    echo date('Y-m-d H:i:s'). '<br>'; 
    /*
        d	Day of the month, 2 digits with leading zeros	01 to 31
        j	Day of the month without leading zeros	1 to 31
        D	A textual representation of a day, three letters	Mon through Sun
        l (lowercase 'L')	A full textual representation of the day of the week	Sunday through Saturday

        F	A full textual representation of a month, such as January or March	January through December
        m	Numeric representation of a month, with leading zeros	01 through 12
        n	Numeric representation of a month, without leading zeros	1 through 12
        M	A short textual representation of a month, three letters	Jan through Dec
    */

// Print yesterday
    echo date('Y-m-d H:i:s', time()-24*60*60). '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
    echo date('F j Y, H:i:s'). '<br>';

// Print current timestamp
    echo time(). '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
    $parsedDate = date_parse('2020-12-12 12:12:12');
    echo '<pre>';
    print_r($parsedDate);
    echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
    $dateString = 'January 1 2021 12:12:12';
    $parsedFormattedDate = date_parse_from_format('F j Y H:i:s', $dateString); 
    echo '<pre>';
    print_r($parsedFormattedDate);
    echo '</pre>';