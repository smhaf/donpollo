<!DOCTYPE html>
<?php
    include("dbconn.php");
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/donpollologo.jpg">
    <title>Add New Product to Menu</title>
    <style>
        <?php include('addProdCSS.css'); ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <form action="addProdProcess.php" method="post">
                <table>
                    <tr>
                        <td>Product ID</td>
                        <td>:</td>
                        <td><input type="text" name="p_id" required></td>
                    </tr>
                    <tr>
                        <td>Product Name</td>
                        <td>:</td>
                        <td><input type="text" name="p_name" required></td>
                    </tr>
                    <tr>
                        <td>Product Description</td>
                        <td>:</td>
                        <td><input type="text" name="p_desc" required></td>
                    </tr>
                    <tr>
                        <td>Product Price</td>
                        <td>:</td>
                        <td><input type="text" name="p_price" required></td>
                    </tr>
                    <tr>
                        <td>Product Type</td>
                        <td>:</td>
                        <td>
                        <select id="p_type" name="p_type" required>
                        <option value="" disabled selected> Choose an option</option>
                        <option value="polo t-shirt">Polo T-shirts</option>
                        <option value="sweatshirt"> Sweatshirt</option>
                        <option value="t-shirt"> T-shirts</option>
                        </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Image Link</td>
                        <td>:</td>
                        <td><input type="text" name="pic" required></td>
                    </tr>
                </table>
                <div class="btn"><button type="submit" value="submit">Submit</button></div>
            </form>
        </div>
        <div class="a">
            <a href='admin.php'>Cancel</a><br>
        </div>
    </div>
</body>
<?php
    mysqli_close($dbconn);
?>
</html>