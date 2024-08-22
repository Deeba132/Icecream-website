<?php include 'navigate1.php';?>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo "Failed to Connect";
}

if(isset($_POST["add"])){
    $producId = $_GET["id"];
    $productName = $_POST["hidden_name"];
    $productImage = $_POST["hidden_image"];
    $productPrice = $_POST["hidden_price"];
    $productQuantity = $_POST["quantity"];

    $sql = "INSERT INTO `product_second` (`description`, `image`, `price`, `quantity`) VALUES ('$productName', '$productImage', '$productPrice', '$productQuantity');";
    mysqli_query($conn, $sql);
}
?>
<html lang="en" style="margin:0;">
<head>
 <link rel="stylesheet" href="stylr.css">
 <link rel="stylesheet" href="gallery.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", rel="stylesheet">
 <link rel="stylesheet" href="/path/to/flickity.css" media="screen">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Icecream website</title>
  
</head>
 <body style="background:url(./images/waffle.jpg);background-size:contain;margin:0px;">
</br>
<div class="container">
      <div class="row">
        <?php 
        $query="SELECT * FROM `product_first`
        ORDER BY id ASC LIMIT 12";
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0)
        {
          while($row=mysqli_fetch_array($result))
          {
            ?>
          <div class="col-md-3 mb-5 " style="border-radius:50px;padding-left: 30px;" >
            <form action="home.php?action=add&id=<?php echo $row['id'];?>" method="post">
             <div class="card" style="width: 18rem;border-radius:50px;background-color:white;height:430px;padding-left:10px;" >
                  <img src="./images/<?php echo $row["image"];?>" style="padding-left:20px;padding-right:20px;padding-top:10px;height:280px;"alt="">
                  <div class="card-body" style="border-radius:50px;" >
                      <h5 class="card-title" style="width:100px;"><b style="color:black;font-size:20px;letter-spacing:0.7px;"><?php echo $row["name"];?></b></h5>
                      <br>
                      <p class="card-text"><b style="color:black;">Price:<?php echo $row["price"];?></b></p>
                          <input type="submit" name="add" action="add" style="font-weight:bold;border:3px solid black; border-radius:5px;width:100px;" value="Add To Cart">
                          <input type="number" id="quantity" style="width:30px;border:3px solid black; border-radius:5px;" placeholder="1" name="quantity" min="0" max="10">
                          <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                          <input type="hidden" name="hidden_image" value="<?php echo $row["image"];?>">
                    </div>   
                </div>
          </form>
          </div>

          <?php
                }
              }
          ?>
          <center>
            <a id="b1" href="products1.php">
              Products ->
            </a>
         </center>
      </div>
    </div>
    
 <?php include 'footer.php';?>
</body>
</html>