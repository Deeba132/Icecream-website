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

if(isset($_GET["action"]) && $_GET["action"] == "delete"){
    $productName = $_GET["name"];
    $deleteQuery = "DELETE FROM `product_second` WHERE description = '$productName'";
    mysqli_query($conn, $deleteQuery);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
    <link type="text/css" rel="stylesheet" href="cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", rel="stylesheet"/>
</head>
<body style="background:url(./images/waffle.jpg);background-size:cover;">
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
<script>
    function clearTable() {
        $('#myTable').detach();
        window.alert("order placed");
        window.location.href="checkout.html";
        }
</script>
<h3 id="h3class">Cart</h3>
    <div class="container" style="padding-bottom:120px">
        <table class="table table-bordered border-dark" name="myTable" id="myTable" style="background-color:white;">
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Remove Item</th>
            </tr>
            <?php
            $query = "SELECT * FROM `product_second` ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            $total = 0;
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><img src="./images/<?php echo $row["image"];?>" style="height:150px;width:150px;" alt=""></td>
                        <td><?php echo $row["description"];?></td>
                        <td><?php echo $row["price"];?></td>
                        <td><?php echo $row["quantity"];?></td>
                        <td><?php echo number_format($row["quantity"]*$row["price"],1);?></td>
                        <td><a id="b1" href="cart.php?action=delete&name=<?php echo $row["description"];?>"><span>Remove Item</span></a></td>
                        <?php
                        $total = $total + ($row["quantity"]*$row["price"]);
                    }
                }
                ?>
                </tr>
                <tr></tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td><?php echo number_format($total, 2);?></td>
                    <td><button onclick="clearTable()">checkout</button></td>
                    
                </tr>

        </table>
    </div>
    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        
  </script>
</body>
</html>