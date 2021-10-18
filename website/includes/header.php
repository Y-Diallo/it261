<?php 

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';


if(isset($_GET['today'])){
    $today = $_GET['today'];
}else {
    $today = date('l');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >
        <title><?php echo $title;?></title>
    </head>
    <body class="<?php echo $body;?>">
        <header>
            <div class="headerBox">
                <a href="index.php">
                <img id="logo" src="images/logo.png" alt="logo">
                </a>
                <nav>
                    <!--<ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Daily</a></li>
                        <li><a href="">Project</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Gallery</a></li>
                    </ul>-->
                    <ul>
                        <?php
                        foreach($nav as $key => $value) {
                            echo '<li><a href="'.$key.'"> '.$value.'  </a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>