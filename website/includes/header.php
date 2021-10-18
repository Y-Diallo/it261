<?php 

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

switch(THIS_PAGE){
    case 'index.php':
        $title = 'Home Page';
        $body = 'home';
        $headline = 'Welcome to our Home Page';
        break;
    case 'about.php':
        $title = 'About Page';
        $body = 'aboutBox';
        $headline = 'Welcome to our About Page';
        break;
    case 'daily.php':
        $title = 'Daily Page';
        $body = 'dailyBox';
        $headline = 'Welcome to our Daily Page where my Homework 3 Switch will display!';
        break;
    case 'project.php':
        $title = 'Project Page';
        $body = 'projectBox';
        $headline = 'Welcome to our Project Page';
        break;
    case 'contact.php':
        $title = 'Contact Page';
        $body = 'contactBox';
        $headline = 'Welcome to our Contact Page';
        break;
    case 'gallery.php':
        $title = 'Gallery Page';
        $body = 'galleryBox';
        $headline = 'Welcome to our Gallery Page';
        break;
}
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
                            if(THIS_PAGE == $key){
                                echo '<li><a class="current" href="'.$key.'"> '.$value.'  </a></li>';
                            }else {
                                echo '<li><a href="'.$key.'"> '.$value.'  </a></li>';
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>