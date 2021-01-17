<?php 
    try{
        $conn = new PDO("mysql:hostname=localhost;port=3306;dbname=products_crud;", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    }catch(PDOException $pe){
        die("Connection Failed ".$pe->getMessage());
    }

    // echo $_SERVER['REQUEST_METHOD'];

    $errors = [];
    $title = '';
    $price = '';
    $description = '';
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $date = date('Y-m-d H:i:s');

        //Validation when title and price fields are empty
        if(!$title){
            $errors[] = "Product title is required";
        }
        if(!$price){
            $errors[] = 'Product price is required';
        }
        if(!is_dir('images')){
            mkdir('images');
        }
        if(empty($errors))  {
            $image = $_FILES['image'] ?? null;                  
            if($image && ($image['tmp_name'] != "")){
                $imagePath = 'images/'.randomStringGenerator(8).'/'.$image['name'];      
                mkdir(dirname($imagePath));          
                move_uploaded_file($image['tmp_name'], $imagePath);                
            }
            
            $statement = $conn->prepare("INSERT INTO products (title, description, image, price, create_date) VALUES (:title, :description, :image, :price, :date)");
            $statement->bindValue(':title', $title);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':image', $imagePath);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':date', $date);
            $statement->execute();  
            header('Location:index.php');
        }
    }
    
    function randomStringGenerator($n){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for($i=0; $i<$n; $i++){
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body{
            padding: 50px;
        }
    </style>
    <title>Add Product</title>
  </head>
  <body>
    <h1>Create new Product</h1>

    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php 
         foreach($errors as $error){
             echo $error.'<br>';
         } 
        ?>
    </div>
    <?php endif; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product-image">Product Image</label><br>
            <input type="file" name="image" id="product-image">
        </div>
        <div class="form-group">    
            <label for="">Product Title</label>
            <input type="text" name="title" id="" class="form-control" value="<?= $title; ?>">
        </div>
        <div class="form-group">
            <label for="">Product description</label>
            <textarea name="description" id="description" class="form-control"><?= $description; ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="number" step="0.1" name="price" id="" class="form-control" value="<?= $price; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary my-3">Submit</button>
        </div>
    </form>
  </body>
</html>