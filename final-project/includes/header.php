<?php 

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = 'You must login first!';
    header('Location: login.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
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
                            echo my_nav($nav);
                        ?>
                    </ul>
                </nav>
                <?php
if(isset($_SESSION['username'])) :?>

<div class="welcome-logout">
    <h3>Hello <?php echo $_SESSION['username']; ?>!</h3>
    <p>You are logged in!<a href="index.php?logout='1'">Log out</a></p>
</div>
<?php endif;?>
            </div>
        </header>