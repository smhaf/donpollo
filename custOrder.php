<!DOCTYPE html>
<?php
    include("dbconn.php");
    session_start();
    
    if($_SESSION['privilege'] != "customer"){/*make sure no unauthorized user access this page*/
        die("<script>alert('Unauthorized User')
            ;window.location.href='login.php';</script>"); 
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/donpollologo.jpg">
    <title>Order Page</title>
    <link rel="stylesheet" href="custOrderCSS.css">
</head>
<body>
    <div class="header">
        <h1><?php echo "Hi ". $_SESSION['cust_name']."!" ?></h1>
        <h2>This is your order</h2>
    </div>
    
    <!--Dptkan order details based on cust id-->
    <div class="wrapper">
        <table border="1">
            <tr>
                <th>Product Picture</th>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Size</th>
                <th>Quantity</th>
                <th>Order Status</th>
                <th>Option</th>
                    <?php
                    $sql = "SELECT prod_order.*, product.picture 
                    FROM prod_order 
                    JOIN product ON prod_order.prod_id = product.prod_id 
                    WHERE prod_order.cust_id = '".$_SESSION['cust_id']."' ";
                    $query = mysqli_query($dbconn, $sql) or die ("Error :". mysqli_error($dbconn));
                    $r = mysqli_num_rows($query);
                    while($row = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td align='center'><img src='" . $row['picture'] . "' alt='Picture' /></td>";
                        echo "<td>". $row['ord_id'] ."</td>";
                        echo "<td>". $row['prod_id'] ."</td>";
                        echo "<td>". $row['size'] ."</td>";
                        echo "<td>". $row['qty'] ."</td>";
                        echo "<td>". $row['ord_status'] ."</td>";
                        if($row['ord_status'] == 'Pending'||$row['ord_status'] == 'pending'){
                            echo "<td><a href='cancelOrder.php?ord_id=".$row['ord_id']."'>Cancel</a></td>";
                        }
                        else{
                            echo "<td>-</td>";
                        }
                        echo "<tr>";
                    }
                    ?>
                    
            </tr>
            
        </table>
        
        
    </div align-items: center>
    
    <div class="prev"><a href='mainPage.php'>Back</a></div>
</body>
<?php 
    mysqli_close($dbconn);
?>
</html>