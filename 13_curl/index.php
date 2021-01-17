<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

// Get response status code

// set_opt_array

// Post request
    $url = 'https://jsonplaceholder.typicode.com/users';
    $resource = curl_init();    
    $userArr = [
        'name' => 'Prajanya',
        'username' => 'prasea', 
        'email' => 'e@mail.com'
        ];
    // echo json_encode($userArr);

//curl_setopt() : Set an option for a cURL transfer 
    curl_setopt($resource, CURLOPT_URL, $url);
    // curl_setopt($resource, CURLOPT_HTTPHEADER, array('Content-Type : application/json'));
    curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($resource, CURLOPT_POST, true);
    curl_setopt($resource, CURLOPT_POSTFIELDS, json_encode($userArr));
    curl_setopt($resource, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json'                                                                               
                                                                              
    ));     

//curl_setopt_array() :  Set multiple options for a cURL transfer
    // curl_setopt_array($resource, [
    //     CURLOPT_URL => $url,
    //     CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
	// 	CURLOPT_RETURNTRANSFER => true, 
	// 	CURLOPT_POST => true, 
	// 	CURLOPT_POSTFIELDS => json_encode($userArr) 
	// ]);
    $newUser = curl_exec($resource);
    curl_close($resource);
    echo $newUser;

    echo "<br><br><br><hr>";

    $hostname = 'localhost';
    $dbname = 'products_crud';
    $username = 'root';
    $password = '';
    try{
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected to database $dbname at $hostname successfully";
    } catch(PDOException $pe){
        die("Couln't connect to database $dbname: ". $pe->getMessage());
    }
    $statement = $conn->prepare("SELECT * FROM products ORDER BY create_date DESC");
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // var_dump($products);
    // echo '</pre>';
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php foreach($products as $product): ?>
    <h1> <?= $product['title']?> </h1>
    <small> $: <?= $product['price']?></small>
    <p><?= $product['description']?></p>
   <?php endforeach; ?> 
</body>
</html>