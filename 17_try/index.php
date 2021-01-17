
<?php 
 try{
    $pdo = new PDO("mysql: host=localhost; dbname=products_crud", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $pe){
     die($pe->getMessage());
 }

 $errors = [];
 $title = '';
 $description = '';
 $price = '';
 if($_SERVER['REQUEST_METHOD'] === 'POST')
 {
     $title = $_POST['title'];
     $description = $_POST['description'];
     $price = $_POST['price'];
     $date = date('Y-m-d H:i:s');
     if(!$title){
         $errors[] = 'Please enter the title field';
     }
     if(!$price){
         $errors[] = 'Please enter the price field';
     }     
     if(!is_dir('images')){
         mkdir('images');
     }
     $imagePath = ''; //To Insert NULL in db image column when no image is uploaded.
     if(empty($errors)){
        $image = $_FILES['image'] ?? null;
        if($image != null && $image['tmp_name'] != ''){                     
            $imagePath = 'images/'.randomStringGenerator(8).'/'.$image['name'];            
            mkdir(dirname($imagePath)); // Created random named folder inside "images"
            move_uploaded_file($image['tmp_name'], $imagePath);
        }
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date) VALUES (:title, :image, :description, :price, :date)");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
     }
 }

 function randomStringGenerator($len){
     $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
     $randomString = '';
     for($i=0;$i<$len;$i++){
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
    <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <h1>Create new Product</h1>
        
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product-image">Product Image</label><br>
            <input type="file" name="image" id="product-image">
        </div>
        <div class="form-group">    
            <label for="">Product Title</label>
            <input type="text" name="title" id="" class="form-control" value="<?= $title ?>">
        </div>
        <div class="form-group">
            <label for="">Product description</label>
            <textarea name="description" id="description" class="form-control"><?= $description ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="number" step="0.1" name="price" id="" class="form-control" value="<?= $price ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary my-3">Submit</button>
        </div>
    </form>
  </body>
</html>