<?php
    include("dbconn.php");
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        /*capture value from post */
        $prod_id = htmlspecialchars($_POST['p_id']);
        $prod_name = htmlspecialchars($_POST['p_name']);
        $prod_desc = htmlspecialchars($_POST['p_desc']);
        $prod_price = htmlspecialchars($_POST['p_price']);
        $prod_type = htmlspecialchars($_POST['p_type']);
        $picture = htmlspecialchars($_POST['pic']);

        /*check if prod_id is null. if yes, go back to addprod.php */
        if(empty($prod_id)){
            die("<script>alert('Primary key is NULL')
            ;window.location.href='addprod.php';</script>");
        }

        $sql = "select * from product where prod_id = '$prod_id';";
        $query = mysqli_query($dbconn, $sql) or die("Error :". mysqli_error($dbconn));
        $row = mysqli_num_rows($query);

        if($row != 0){
            die("<script>alert('Primary key already exist')
            ;window.location.href='addprod.php';</script>");
        }

        $sql = "select * from product where prod_name = '$prod_name';";
        $query = mysqli_query($dbconn, $sql) or die("Error :". mysqli_error($dbconn));
        $row = mysqli_num_rows($query);

        if($row != 0){
            die("<script>alert('product name already exist')
            ;window.location.href='addprod.php';</script>");
        }


        $sql = "insert into product values ('$prod_id', '$prod_name','$prod_desc', '$prod_price', '$picture', '$prod_type')";
        mysqli_query($dbconn, $sql) or die("Error :". mysqli_error($dbconn));
        die("<script>alert('Data inserted successfully')
            ;window.location.href='admin.php';</script>");
    }
    else{
        header("Location: admin.php");
    }
    mysqli_close($dbconn);

?>