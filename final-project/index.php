<?php 
    include('config.php');
    include('includes/header.php');

    $photos = array(
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
    );
?>
<div id="wrapper">
    <h1><?php echo $headline;?></h1>
    <div id="hero">
    <?php 
        echo random_pics($photos);
    ?>
    </div>
    
    <p>Mechanical keyboards are the keyboards that most people picture when they think about keyboards; they're the classic-looking, sturdy keyboards from the 1980s. A more proper definition is that mechanical keyboards are made with high-quality plastic key switches underneath each of the keycaps.</p>  
    
<?php 
include('includes/footer.php');
?>
            