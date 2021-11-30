<?php

include('config.php');
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else{
    header('Location: project.php');
}


$sql = 'SELECT * FROM streamers WHERE id = '.$id.'';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $gamertag = stripslashes($row['gamertag']);
        $platform = stripslashes($row['platform']);
        $age = stripslashes($row['age']);
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
<h1> Welcome to <?php echo $first_name;?>'s page!</h1>

<?php if($feedback == ''){
echo '<ul>';
echo '<li><b>First Name: </b>'.$first_name.'</li>';
echo '<li><b>Last Name: </b>'.$last_name.'</li>';
echo '<li><b>Gamertag: </b>'.$gamertag.'</li>';
echo '<li><b>Age: </b>'.$age.'</li>';
echo '<li><b>Platform: </b>'.$platform.'</li>';
echo '</ul>';
echo '<p>'.$description.'</p>';
echo '<p>Return to the <a href="project.php">project page!</a></p>';
}
?>
</main>
<aside class = "container">
    <?php if($feedback == ''){//need images and blurbs
        echo '<img id="image" src="images/project'.$id.'.jpg" alt="'.$first_name.'"></td>';
        echo '<p class="blurb">'.$blurb.'</p>';
    }?>
</aside>


<?php
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');
?>