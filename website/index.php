<?php 
    include('config.php');
    include('includes/header.php');
?>
<div id="wrapper">
    <div id="hero">
    <?php 
        echo random_pics($photos);
    ?>
<h2>
<pre>
<br>
//put random pics function here
</pre>
</h2>
    </div>
    <main>
    <h1><?php echo $headline;?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </main>

    <aside>


    </aside>
<?php 
include('includes/footer.php');
?>
            