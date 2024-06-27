<?php
    include("dbconn.php");
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['update'])){
            $prod_id = $_SESSION['p_id'];
            $prod_name = htmlspecialchars($_POST['p_name']);
            $prod_desc = htmlspecialchars($_POST['p_desc']);
            $prod_price = htmlspecialchars($_POST['p_price']);
            $prod_type = htmlspecialchars($_POST['p_type']);
            $picture = htmlspecialchars($_POST['pic']);

            $sql = "update product set prod_name = '$prod_name', prod_desc = '$prod_desc',
                    prod_price = '$prod_price', prod_type = '$prod_type', picture = '$picture'
                    where prod_id = '$prod_id'";
            $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
            die("<script>alert('Update successfully')
            ;window.location.href='admin.php';</script>");
        }
        elseif(isset($_POST['delete'])){
            $prod_id = $_SESSION['f_id'];

            $sql = "delete * from product where prod_id = '$prod_id'";
            $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
            die("<script>alert('Delete successfully')
            ;window.location.href='admin.php';</script>");
        }
        else{
            die("<script>alert('No changes has been made')
            ;window.location.href='admin.php';</script>");
        }
    }
    else{
        header("location: admin.php");
    }
    mysqli_close($dbconn);

?>