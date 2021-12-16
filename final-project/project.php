<?php 
    include('config.php');
    include('includes/header.php');
?>
<div id="wrapper">
    <main class = "container">
    <h1><?php echo $headline;?></h1>
    <p>Mechanical keyboard switches are the core components of a mechanical keyboard. These unique little devices are the main contributors to the tactile and clicky experience. But there are numerous types of keyboard switches with different names and features.</p>
    <?php
$sql = 'SELECT * FROM switches';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<h3> For more information about '.$row['name'].'s, please click <a href="project-view.php?id='.$row['id'].'">here!</a></h3>';
        echo '<ul class="labels">';
        echo '<li>Name: '.$row['name'].'</li>';
        echo '<li></li>';
        echo '<li>Type: '.$row['type'].'</li>';
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
    <h3>So many switches!</h3>
    <img id="image" src="images/project1.webp" alt="switch"><!--picture related to form-->
    </aside>
<?php 
include('includes/footer.php');
?>
            