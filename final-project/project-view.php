<?php

include('config.php');
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else{
    header('Location: project.php');
}


$sql = 'SELECT * FROM switches WHERE id = '.$id.'';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $name = stripslashes($row['name']);
        $type = stripslashes($row['type']);
        $resistance = stripslashes($row['resistance']);
        $description = stripslashes($row['description']);
        $blurb = stripslashes($row['blurb']);
        $feedback = '';
    }
}else {
    $feedback = 'Something is not working';
}

include('includes/header.php');
?>
<div id="wrapper">
<main>
<h1> <?php echo $name;?>!</h1>

<?php if($feedback == ''){
echo '<ul class="labels">';
echo '<li><b>Name: </b>'.$name.'</li>';
echo '<li><b>Type: </b>'.$type.'</li>';
echo '<li><b>Resistance: </b>'.$resistance.'</li>';
echo '</ul>';
echo '<p>'.$description.'</p>';
echo '<p>Return to the <a href="project.php">project page!</a></p>';
}
?>
</main>
<aside class = "container">
    <?php if($feedback == ''){//need images and blurbs
        echo '<img id="image" src="images/project'.$id.'.webp" alt="'.$name.'">';
        echo '<p class="blurb">'.$blurb.'</p>';
    }?>
</aside>


<?php
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');
?>