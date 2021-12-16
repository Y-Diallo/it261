<?php 
    include('config.php');
    include('includes/header.php');
?>
<div id="wrapper">
    <main class = "container">
    <h1><?php echo $headline;?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
    <?php
$sql = 'SELECT * FROM streamers';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<h3> For more information about '.$row['gamertag'].', please click <a href="project-view.php?id='.$row['id'].'">here!</a></h3>';
        echo '<ul>';
        echo '<li>Name: '.$row['first_name'].' '.$row['last_name'].'</li>';
        echo '<li></li>';
        echo '<li>Gamer Tag: '.$row['gamertag'].'</li>';
        echo '</ul>';
        echo '<hr>';
    }
} else {
    echo 'Houston, we have a problem';
}

mysqli_free_result($result);
mysqli_close($iConn);
?>
    </main>

    <aside class="container">
    <h3>Our Aside for our Project</h3>
    <img id="image" src="images/project.png" alt="youtube logo"><!--picture related to form-->
    </aside>
<?php 
include('includes/footer.php');
?>
            