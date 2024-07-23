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
<!DOCTYPE html>
<html lang="en" style="margin:0;">
<head>
 <link type="text/css" rel="stylesheet" href="stylr.css">
 <link type="text/css" rel="stylesheet" href="gala.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Icecream website</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
 <style>
  .body{
    background:url(./images/waffle.jpg);background-size:contain;margin:0px;padding-right:0px;padding-left:0px;
  }
  .heading{
    font-size:30px;color:black;font-align:center;}
  </style>
  
</head>
<body class="body">



  <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #ff8c00">
          <div class="container-fluid">
            <a style="color:#000000" class="navbar-brand" href="./loginform/Admin.html"><b>Admin Panel</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a style="color: #000000" class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
                </li>
                <li class="nav-item">
                  <a style="color: #000000" class="nav-link" href="products.php"><b>Products</b></a>
                </li>
                <li class="nav-item">
                  <a style="color: #000000" class="nav-link" href="about.php"><b>About</b></a>
                </li>
                <li class="nav-item">
                  <a style="color: #000000" class="nav-link" href="./loginform/contact.html"><b>Any Queries?</b></a>
                </li>
                <li class="nav-item">
                  <a style="color: #000000;font-weight:bold;" class="nav-link" href="cart.php">Cart</a>
                </li>
            </div>
          </div>
        </nav>
 </div>
 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <div class="container-fluid " style="padding-left:0px;padding-right:0px;width: 100vw;">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 900px;position:relative;">
            <img class="w-100" src="./images/cream12.jfif"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item"style="height: 900px;">
            <img src="./images/3image.jpg"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item"style="height: 900px;">
            <img src="./images/2image.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>
 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

                        
                




    <!-- this id for website title -->
      <div class="container-fluid">
        <div class="my-5">
          <h3 class="text-center" style="color:black;"><b>Welcome Delights!!</b></h3>
        </div>
      </div>
    <!-- <third child> -->
    <!-- The sidebar -->

    <!-- products -->
    <div class="container">
      <div class="row">
        <?php 
        $query="SELECT * FROM `product_first`
        ORDER BY id ASC LIMIT 8";
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0)
        {
          while($row=mysqli_fetch_array($result))
          {
            ?>
          <div class="col-md-3 mb-5 " style="border-radius:50px;padding-left: 18px;" >
            <form action="home.php?action=add&id=<?php echo $row['id'];?>" method="post">
             <div class="card" style="width: 18rem;border-radius:50px;background-color:white;height:430px;padding-left:10px;" >
                  <img src="./images/<?php echo $row["image"];?>" style="height:300px;"alt="">
                  <div class="card-body" style="border-radius:50px;" >
                      <h5 class="card-title" style="width:100px;"><b style="color:black;font-size:20px;letter-spacing:0.7px;"><?php echo $row["name"];?></b></h5>
                      <br>
                      <p class="card-text"><b style="color:black;">Price:<?php echo $row["price"];?></b></p>
                          <input type="submit" name="add" action="add" style="font-weight:bold;border:3px solid black;border-radius:5px;width:100px;" value="Add To Cart">
                          <input type="number" id="quantity" style="width:30px;border:3px solid black; border-radius:5px;" placeholder="1" name="quantity" min="1" max="10">
                          <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
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
      </div>
    </div>
    <br>
    <center>
      <a id="b1" href="products.php">
              Products ->
            </a>
    </center>
<div class="container-fluid" style="padding-top:90px;padding-bottom:0px;object-fit:cover;padding-left:0px;">
        <video width="1520" height="450" style="object-fit:cover;padding-bottom:90px;padding-left:0px;" autoplay loop muted>
          <source src="./images/anime.mp4" type="video/mp4" style="object-fit:cover;padding-bottom:0px;">
          <source src="./images/anime.mp4" type="video/ogg" style="object-fit:cover;padding-bottom:0px;">
          Your browser does not support the video tag.
        </video>
</div>
<div style="padding-bottom:110px;">
 <p class="heading"><b>DELIGHTS   GALLERY</b></p>
  <div class="gallery-image">
    <div class="img-box">
      <img src="./images/gallery.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Choco</p>
          <p class="opacity-low">Chocolicious</p>
        </div>
      </div>
    </div>
    <div class="img-box">
    <img src="./images/gallery1.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Vanilla</p>
          <p class="opacity-low">Creaminess</p>
        </div>
      </div>
    </div>
    <div class="img-box">
    <img src="./images/gallery2.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Berry</p>
          <p class="opacity-low">Very Berry</p>
        </div>
      </div>
    </div>
    <div class="img-box">
    <img src="./images/gallery3.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Cookie Crunch</p>
          <p class="opacity-low">Crunchy Creamy</p>
        </div>
      </div>
    </div>
    <div class="img-box">
     <img src="./images/gallery4.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Caramel</p>
          <p class="opacity-low">caramello</p>
        </div>
      </div>
    </div>
    <div class="img-box">
     <img src="./images/gallery5.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Mango</p>
          <p class="opacity-low">Fresh N Cream</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';?>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
  <script src="/path/to/flickity.pkgd.min.js">

  </script>
 <script>
    window.onload = function () { 
    let slides = 
      document.getElementsByClassName('carousel-item'); 

    function addActive(slide) { 
      slide.classList.add('active'); 
    } 

    function removeActive(slide) { 
      slide.classList.remove('active'); 
    } 

    addActive(slides[0]); 
    setInterval(function () { 
      for (let i = 0; i < slides.length; i++) { 
        if (i + 1 == slides.length) { 
          addActive(slides[0]); 
          setTimeout(removeActive, 350, slides[i]); 
          break; 
        } 
        if (slides[i].classList.contains('active')) { 
          setTimeout(removeActive, 350, slides[i]); 
          addActive(slides[i + 1]); 
          break; 
        } 
      } 
    }, 1500); 
   };
 </script>
 <script>
      $(document).ready(function(){  
    $("#slide_window2").hover(function(){
      $(this)
        .animate({"left": "63px"}, 500);
      });
      $("#slide_window2").mouseleave(function(){
        $("#slide_window2")
        .animate({"left": "1px"}, 500);
      });
    });


  </script>
  




    
 </body> 
</html>
