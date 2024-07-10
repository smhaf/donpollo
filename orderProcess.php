<?php
    session_start();
    include("dbconn.php");

    if($_SESSION['privilege'] != "customer"){/*make sure no unauthorized user access this page*/
        die("<script>alert('You have not login yet. Lets do that now!!')
            ;window.location.href='login.php';</script>");
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        /*capture data from post */
        $ord_id = "";
        $cust_id = $_SESSION['cust_id'];
        $prod_id = htmlspecialchars($_POST['prodID']);
        $qty = htmlspecialchars($_POST['quantity']);
        $size = htmlspecialchars($_POST['size']);
        $ord_status = "Ready to pick up";

        do{/*generate ord_id */
            $id = (string)rand(1,99999);
        
            while(strlen($id) < 5){
                $id = "0".$id;
            }
            $id = "O".$id;
            
            $sql = "select * from prod_order where ord_id = '$id'";
            $query = mysqli_query($dbconn, $sql) or die("Error :". mysqli_error($dbconn));
            $row = mysqli_num_rows($query);

            $ord_id = ($row == 0 ? $id : "");
        }while($row != 0);

        //insert order into database
        $sql = "insert into prod_order (ord_id, cust_id, prod_id, qty, ord_status,size)
                values ('$ord_id', '$cust_id', '$prod_id', '$qty', '$ord_status', '$size');";
        mysqli_query($dbconn, $sql) or die("Error :". mysqli_error($dbconn));
        ?>
        <script>alert('Your order has been made. Now proceed with payment.');</script>
        <?php    
        header("Location: payment.php?o_id=$ord_id");
    }
    else{
        header("Location: product1.php");
    }
    mysqli_close($dbconn);
?>