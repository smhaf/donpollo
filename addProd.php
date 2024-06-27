<!DOCTYPE html>
<?php
    include("dbconn.php");
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Food to Menu</title>
    <!-- <link rel="stylesheet" href="addFoodCSS.css"> -->
    <style>
        <?php include('addFoodCSS.css'); ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <form action="addProdProcess.php" method="post">
                <table>
                    <tr>
                        <td>prod_id</td>
                        <td>:</td>
                        <td><input type="text" name="p_id" required></td>
                    </tr>
                    <tr>
                        <td>prod_name</td>
                        <td>:</td>
                        <td><input type="text" name="p_name" required></td>
                    </tr>
                    <tr>
                        <td>prod_desc</td>
                        <td>:</td>
                        <td><input type="text" name="p_desc" required></td>
                    </tr>
                    <tr>
                        <td>prod_price</td>
                        <td>:</td>
                        <td><input type="text" name="p_price" required></td>
                    </tr>
                    <tr>
                        <td>prod_type</td>
                        <td>:</td>
                        <td><input type="text" name="p_type" required></td>
                    </tr>
                    <tr>
                        <td>picture</td>
                        <td>:</td>
                        <td><input type="text" name="pic" required></td>
                    </tr>
                </table>
                <div class="btn"><button type="submit" value="submit">submit</button></div>
            </form>
        </div>
        <div class="a">
            <a href='admin.php'>cancel</a><br>
        </div>
    </div>
</body>
<?php
    mysqli_close($dbconn);
?>
</html>