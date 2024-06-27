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
    <title>Edit Product</title>
    <style>
        <?php include('editFoodCSS.css') ?>
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
                <td>prod_id</td>
                <td>:</td>
                <td><?php echo $prod_id; ?></td>
            </tr>
            <tr>
                <td>prod_name</td>
                <td>:</td>
                <td><input type="text" name="p_name" value="<?php echo $prod_name; ?>"></td>
            </tr>
            <tr>
                <td>prod_desc</td>
                <td>:</td>
                <td><input type="text" name="p_desc" value="<?php echo $prod_desc; ?>"></td>
            </tr>
            <tr>
                <td>prod_price</td>
                <td>:</td>
                <td><input type="text" name="p_price" value="<?php echo $prod_price; ?>"></td>
            </tr>
            <tr>
                <td>prod_type</td>
                <td>:</td>
                <td><input type="text" name="p_type" value="<?php echo $prod_type; ?>"></td>
            </tr>
            <tr>
                <td>picture</td>
                <td>:</td>
                <td><input type="text" name="pic" value="<?php echo $picture; ?>"></td>
            </tr>
        </table>
        <input type="submit" name = "update" value = "Update">
        <input type="submit" name = "delete" value = "Delete">
    </form>
    <a href='admin.php'>cancel</a><br>
</body>
<?php
    mysqli_close($dbconn);
?>
</html>