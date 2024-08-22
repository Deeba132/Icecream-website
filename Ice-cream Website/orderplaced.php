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
    $name=$_POST['name'];
    $zipcode = $_POST['zipcode'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $sql="INSERT INTO `orders` (`name`, `zipcode`, `number`, `address`) VALUES ('$name', '$zipcode', '$number', '$address');";
    mysqli_query($conn,$sql);
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
    <body style="background:url(./images/waffle.jpg)">
    <div class="container-fluid p-0">
          <?php include 'navigate1.php';?>

         </div>
    </br>
    <h2 style="color:black;"><center>
    order placed successfully
        </center>
    <a class="button" href="../products.php">shop here</a>
    
    </body>
</html>
