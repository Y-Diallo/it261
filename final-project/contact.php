<?php 
    include('config.php');
    include('includes/header.php');
?>
<div id="wrapper">
    <main class = "container">
    <h1><?php echo $headline;?></h1>
    <p>Contact Us and get regular mechanical keyboard content!</p>
    <h2>Please fill out our form!</h2>
    <?php 
    include('includes/form.php');
    ?>
    </main>

    <aside>
    <h3>Keybooarddzz!</h3>
    <img id="image" src="images/form.jpg" alt="keyboard"><!--picture related to form-->
    <p></p><!--aside text-->
    </aside>
<?php 
include('includes/footer.php');
?>
            