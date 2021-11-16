<?php 
    include('config.php');
    include('includes/header.php');
?>
<div id="wrapper">
    <div class="formMain">
    <h1><?php echo $headline;?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
    <h2>Please fill out our form!</h2>
    <?php 
    include('includes/form.php');
    ?>
    </div>

    <aside>
    <h3>Our Aside for our Form</h3>
    <img src="images/form.png" alt="among us character"><!--picture related to form-->
    </aside>
<?php 
include('includes/footer.php');
?>
            