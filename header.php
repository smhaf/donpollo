<html>
<script>
function confirmation() {
    let text;
    if (confirm("Are you sure that you want to leave :( ?") == true) {
        window.location.href='logoutC.php';
    } else {
    }
}
</script>
<style>
    <?php include("headerCSS.css") ?>
</style>
</script>
<header id="myHeader" href="mainPage.php">
        <div class="c">
            <div class="lefty-section">
                <a href="mainPage.php"><img src="pics/donpollologo.jpg" alt="Logo" class="logo"></a>
                <h1 class=custfont id=tagline > DonPollo Enterprise.</h1>
            </div>
            <nav>
                <?php 
                    echo "<a href='mainPage.php'>Back</a>";
                    echo "<a onClick = 'confirmation()'>Logout</a>";
                ?> 
            </nav>
        </div>
</header>
</html>