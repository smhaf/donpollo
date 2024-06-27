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
    <title>Document</title>
    <style>
        <?php include('foodCSS.css'); ?>
    </style>
</head>
<body>
    <header>
        <div class="header">
            <h1>Product Details</h1>
        </div>
    </header>
    <div class="wrapper">
        <table border="1">
            <tr>
                <th>Product ID</th>
                <th>Product name</th>
                <th>Product description</th>
                <th>Product price</th>
                <th>Product type</th>
                <th>Picture link</th>
                <th>Option</th>
            </tr>
            <?php
                $sql = "select * from product;";
                $query = mysqli_query($dbconn, $sql) or die ("Error :". mysqli_error($dbconn));
                $r = mysqli_num_rows($query);

                while($row = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>". $row['prod_id'] ."</td>";
                    echo "<td>". $row['prod_name'] ."</td>";
                    echo "<td>". $row['prod_desc'] ."</td>";
                    echo "<td>". $row['prod_price'] ."</td>";
                    echo "<td>". $row['prod_type'] ."</td>";
                    echo "<td>". $row['picture'] ."</td>";
                    echo "<td><a href='editProd.php?p_id=".$row["prod_id"]."'>Edit</a></td>";
                    echo "<tr>";
                }
            ?>
        </table>
    </div>
    <div class="addfud">
        <a href='addProd.php'><button>add new Product</button></a><br>
    </div>
    <div class="back">
        <a href='admin.php'><button>cancel</button></a><br>
    </div>  
</body>
<?php
    mysqli_close($dbconn);
?>
</html>