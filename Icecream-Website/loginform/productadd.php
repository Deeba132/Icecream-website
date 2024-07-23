<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";
$conn =mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "../images/" . basename($image);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO product_first (id,name, price, image) VALUES ('$id','$name', '$price','$image')";

        if ($conn->query($sql) === FALSE) 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload image";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", rel="stylesheet">
        <link rel="stylesheet" href="">
        <style>
            .button {
           margin-left:675px;
           justify-content:center;
           align-items:center;
            background-color: black; 
            border: 2px solid black;
            border-radius:20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
          }
            </style>
    </head>
    <body style="background:url(../images/waffle.jpg)">
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #ff8c00">
          <div class="container-fluid">
            <a style="color:#000000" class="navbar-brand" href="./loginform/login.html"><b>Login</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a style="color: #000000" class="nav-link active" aria-current="page" href="../home.php"><b>Home</b></a>
                </li>
                <li class="nav-item">
                  <a style="color: #000000" class="nav-link" href="../products.php"><b>Products</b></a>
                </li>
                <li class="nav-item">
                  <a style="color: #000000" class="nav-link" href="../about.php"><b>About</b></a>
                </li>
                <li class="nav-item">
                  <a style="color: #000000" class="nav-link" href="contact.html"><b>Any Queries?</b></a>
                </li>
                <li class="nav-item">
                  <a style="color: #000000;font-weight:bold;" class="nav-link" href="../cart.php">Cart</a>
                </li>
            </div>
          </div>
        </nav>
 </div>
    </br>
    <h2 style="color:black;"><center>
    Product added successfully
        </center>
    <a class="button" href="../products.php">View Product here</a>
    
    </body>
</html>
