<?php
    include ('dbconn.php');
    session_start();
?>
<script>
function confirmation() {
    let text;
    if (confirm("Are you sure that you want to leave :( ?") == true) {
        window.location.href='logoutC.php';
    } else {
    }
}
</script>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Don Pollo Online Clothing Store</title>
        <link rel="icon" href="pics/donpollologo.jpg">
        <!--<link rel="stylesheet" href="irdp2CSS.css">-->
        <style>
            <?php include('mainPageCSS.css'); ?> 
        </style>
    </head>
    <body>
    <header id="myHeader" >
        <div class="container">
            <div class="left-section">
                <img src="pics/donpollologo.jpg" alt="Logo" class="logo">
                <h1 class=custfont id=tagline > DonPollo Enterprise.</h1>
            </div>
            <nav>
                <a href="custOrder.php">Your Order</a>
                <?php 
                    if(isset($_SESSION['cust_id'])){
                        echo "<a onClick = 'confirmation()'>Logout</a>";
                    }
                    else{
                        echo "<a href='login.php'>Login</a>";
                    }
                ?> 
            </nav>
        </div>
    </header>
        <main class="maincontainer">
            <section id="featured-products">
                <div class="feaprod">
                <h2 class= mainsec>Featured Products</h2>
                </div>
                <div class="product-wrapper">
                    <div class="product-grid" id="product-grid">

                        <?php 
                            $sql = "SELECT * FROM product;";
                            $result = mysqli_query($dbconn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    $prod_name = $row['prod_name'];
                                    $prod_desc = $row['prod_desc'];
                                    $prod_price = $row['prod_price'];
                                    $prod_picture = $row['picture'];
                                    $prod_id = $row['prod_id'];

                                    echo "<a href='product1.php?p_id=$prod_id' class='product'>
                                             <div class='product-content'>
                                                <img src='$prod_picture' alt='$prod_name'>
                                                <h3 >$prod_name</h3>
                                                <p>RM $prod_price</p>
                                             </div>
                                          </a>";
                                    }
                                }
                     ?>
                    </div>
                </div>

                </div>
            </section>
            <section id="Categories">
                <h2 class=mainsec>Browse by Categories</h2>
                <div class="category-grid">
                    <div class="category">
                        <a href="#ice-cream" class="scroll-link">
                        <img src="https://i.ibb.co/hcRKJwk/goods-467039-sub12.jpg" alt="ice-cream" border="0">
                        <h3>Polo T-shirts</h3>
                        </a>
                    </div>
                    <div class="category" class="scroll-link">
                        <a href="#cake">
                        <img src="https://i.ibb.co/1znwfJS/goods-462199-sub13.jpg" alt="cake" border="0">
                        <h3>Sweatshirts</h3>
                        </a>
                    </div>
                    <div class="category" class="scroll-link">
                        <a href="#cookie">
                        <img src="https://i.ibb.co/z7LfZt0/goods-465185-sub12.jpg" alt="cookie" border="0">
                        <h3>T-shirts</h3>
                        </a>
                    </div>
                </div>
            </section>
            <section class="ice-cream">
                <h2 class=customfont id="ice-cream">Polo T-Shirts</h2>
                <div class="iceCream-container" >
                    <?php
                        $sql_ice = "SELECT * FROM product WHERE prod_type='polo t-shirt';";
                        $result = mysqli_query($dbconn,$sql_ice);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $prod_name = $row['prod_name'];
                                $prod_desc = $row['prod_desc'];
                                $prod_price = $row['prod_price'];
                                $prod_picture = $row['picture'];

                                echo "<a href=product1.php?p_id=".$row['prod_id']." class= 'producti'>
                                <div class='product'>
                                    <img src='$prod_picture' alt='$prod_name'>
                                    <h3>$prod_name</h3>
                                    <p>RM $prod_price</p>
                                </div>
				                </a>";
				                
                            }
                        }

                    ?>
                </div>
            </section>
            <section class="cake">
                <h2 class=customfont id="cake">Sweatshirts</h2>
                <div class="cake-container" >
                    <?php
                        $sql_cake = "SELECT * FROM product WHERE prod_type='sweatshirt';";
                        $result = mysqli_query($dbconn,$sql_cake);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $prod_name = $row['prod_name'];
                                $prod_desc = $row['prod_desc'];
                                $prod_price = $row['prod_price'];
                                $prod_picture = $row['picture'];

                                echo "<a href=product1.php?p_id=".$row['prod_id']." class= 'producti'>
                                <div class='product'>
                                    <img src='$prod_picture' alt='$prod_name'>
                                    <h3>$prod_name</h3>
                                    <p>RM $prod_price</p>
                                </div>
				                </a>";
                            }
                        }

                    ?>
                </div>
            </section>
            <section class="cookie">
                <h2 class=customfont id="cookie">T-Shirts</h2>
                <div class="cookie-container" >
                    <?php
                        $sql_cookie = "SELECT * FROM product WHERE prod_type='t-shirt';";
                        $result = mysqli_query($dbconn,$sql_cookie);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $prod_name = $row['prod_name'];
                                $prod_desc = $row['prod_desc'];
                                $prod_price = $row['prod_price'];
                                $prod_picture = $row['picture'];

                                echo "<a href=product1.php?p_id=".$row['prod_id']." class= 'productk'>
                                <div class='product'>
                                    <img src='$prod_picture' alt='$prod_name'>
                                    <h3>$prod_name</h3>
                                    <p>RM $prod_price</p>
                                </div>
				                </a>";
                            }
                        }

                    ?>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-container">
                <p>&copy; 2024 Donpollo . All rights reserved.</p>
            </div>
        </footer>

        <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        </script>
        <script>
            window.onscroll = function() {myFunction()};

            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;

            function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
            }
        </script>
    </body>
    <?php mysqli_close($dbconn); ?>
</html> 
