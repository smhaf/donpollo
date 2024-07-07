<!DOCTYPE html>
<?php
    include("dbconn.php");
    session_start();
    
    if($_SESSION['privilege'] != "admin"){/*make sure no unauthorized user access this page*/
        die("<script>alert('Unauthorized User')
            ;window.location.href='login.php';</script>"); 
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/donpollologo.jpg">
    <title>Edit Product</title>
    <style>
        <?php include('editProdCSS.css') ?>
    </style>
</head>
<body>
    <h1>Update Product</h1>
    <form action="upDelProd.php" method="post">
        <?php
            $prod_id = $_REQUEST['p_id'];
            $sql = "SELECT * FROM product WHERE prod_id= '$prod_id';";
            $query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error($dbconn));
            $row = mysqli_num_rows($query);
        
            if($row == 0){
                echo "No record found";
            }
            else{
                $r = mysqli_fetch_assoc($query);
                $prod_name = $r['prod_name'];
                $prod_desc = $r['prod_desc'];
                $prod_price = $r['prod_price'];
                $prod_type = $r['prod_type'];
                $picture = $r['picture'];
            }

            $_SESSION['p_id'] = $prod_id;
        ?>
        <table>
            <tr>
                <td>Product ID</td>
                <td>:</td>
                <td><?php echo $prod_id; ?></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>:</td>
                <td><input type="text" name="p_name" value="<?php echo $prod_name; ?>"></td>
            </tr>
            <tr>
                <td>Product Description</td>
                <td>:</td>
                <td><input type="text" name="p_desc" value="<?php echo $prod_desc; ?>"></td>
            </tr>
            <tr>
                <td>Product Price</td>
                <td>:</td>
                <td><input type="text" name="p_price" value="<?php echo $prod_price; ?>"></td>
            </tr>
            <tr>
                <td>Product Type</td>
                <td>:</td>
                <td>
                <select id="p_type" name="p_type" value="<?php echo $prod_type; ?>" required >
                        
                        <option value="polo t-shirt">Polo T-shirts</option>
                        <option value="sweatshirt"> Sweatshirt</option>
                        <option value="t-shirt"> T-shirts</option>
                        </select> </td>
            </tr>
            <tr>
                <td>Image Link</td>
                <td>:</td>
                <td><input type="text" name="pic" value="<?php echo $picture; ?>"></td>
            </tr>
        </table>
        <input type="submit" name = "update" class="updel" value = "Update">
        <input type="submit" value = "Cancel" href='admin.php'>
    </form>
</body>
<?php
    mysqli_close($dbconn);
?>
</html>