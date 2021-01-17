<?php
// Magic constants
    echo __DIR__.'<br>';
    echo __FILE__.'<br>';
    echo __LINE__.'<br>';
// Create directory
    // mkdir('test');
// Rename directory
    // rename('test', 'test2');

// Delete directory
    // rmdir('test2');

// Read files and folders inside directory ./ ~ 11_fs and ../ ~ PHP_CRASH-COURSE-2020
    $files = scandir('../');
    echo '<pre>';
    var_dump($files);
    echo '</pre>';
// file_get_contents - To read the file, file_put_contents - To write in the file
    $datas = file_get_contents('lorem.txt');
    echo $datas;

    file_put_contents('sample.txt', 'Newly added');
// file_get_contents from URL
    $usersJSON = file_get_contents('https://jsonplaceholder.typicode.com/users');
    //To convert JSON data to array
    $users = json_decode($usersJSON, true);
//json_decode(The json string being decoded, true(JSON object will be returned as associative array)/false(JSON object will be returned as Object))
    echo '<pre>';
    var_dump($users);
    echo '</pre>';
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file