<!DOCTYPE html>
<?php
    session_start();
    include("dbconn.php");

    $f_id = $_REQUEST['p_id'];

    $sql = "select * from product where prod_id = '$f_id'";
    $query = mysqli_query($dbconn, $sql) or die("Error :". mysqli_error($dbconn));
    $row = mysqli_fetch_assoc($query);

    $prod_id = $row['prod_id'];
    $prod_name = $row['prod_name'];
    $prod_desc = $row['prod_desc'];
    $prod_price = $row['prod_price'];
    $prod_type = $row['prod_type'];
    $picture = $row['picture'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/donpollologo.jpg">
    <title><?php echo $prod_name; ?></title>
    <!--<link rel="stylesheet" href="product1CSS.css">-->
    <style>
        <?php include('product1CSS.css') ?>
    </style>
</head>
<body>
    <header>
        <div class="head-container">
            <!--sini echo prod name-->
            <div class="title"><h1><?php echo $prod_name; ?></h1></div>
        </div>
    </header>
    <main class="container">
        <div class="product-detail">
            <img src=<?php echo $picture; ?> alt="Product 1">   
            <div class="product-info">
                <form id="prod1" action="orderProcess.php" method="POST">
                    <!--sini pun echo je prod name dekat value tu-->
                    <input type="hidden" name="prodName" id="prodName" value="<?php echo $prod_name; ?>">
                    <label for="prodName" class="prodName"><?php echo $prod_name; ?></label>
                    <!--sini pun (price)-->
                    <input type="hidden" name="prodPrice" id="prodPrice" value="<?php echo $prod_price; ?>">
                    <h4>Price: <label for="prodPrice" class="prodPrice">RM<?php echo $prod_price; ?></label></h4>
                    <!--sini pun (desc)-->
                    <p>Description:</p>
                    <input type="hidden" name="prodDesc" id="prodDesc" value="<?php echo $prod_desc; ?>">
                    <label for="prodDesc" class="prodDesc"><?php echo $prod_desc; ?></label><br><br>
                    
                    <label for="quantity">Product Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" required><br>
                    <label for="size">Size:</label>
                    <select id="size" name="size" required>
                        <option value="" disabled selected> Choose an option</option>
                        <option value="S"> S</option>
                        <option value="M"> M</option>
                        <option value="L"> L</option>
                    </select>
                </form>
                <div class="center"><a href="mainPage.php"><button class="buyMe" type="submit" form="prod1" name="prodID" value="<?php echo $prod_id; ?>">Buy Now</button></a></div>
            </div>
        </div>
    </main>
    <footer>
        <div class="foot-container">
            <p>&copy; 2024 Donpollo. All rights reserved.</p>
        </div>
    </footer>
</body>
<?php
    mysqli_close($dbconn);
?>
</html>
