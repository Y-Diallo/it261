<?php 

//$variable = 'bonk';
if(isset($variable)){
    echo 'yip';
}else {
    echo 'nop';
}


if(isset($_GET['today'])){
    $today = $_GET['today'];
}else {
    $today = date('l');
}

//switch

switch($today) {
    case 'Sunday' :
        $nestleWater = '<h2>Sunday is Arrowhead Day!</h2>';
        $pic = 'arrowhead.jpeg';
        $alt = 'Arrowhead';
        break;

    case 'Monday' :
        $nestleWater = '<h2>Monday is Poland Spring Day!</h2>';
        $pic = 'polandSpring.jpeg';
        $alt = 'Poland Spring';
        break;

    case 'Tuesday' :
        $nestleWater = '<h2>Tuesday is Ozarka Day!</h2>';
        $pic = 'ozarka.jpeg';
        $alt = 'Ozarka';
        break;

    case 'Wednesday' :
        $nestleWater = '<h2>Wednesday is Ice Mountain Day!</h2>';
        $pic = 'iceMountain.jpeg';
        $alt = 'Ice Mountain';
        break;

    case 'Thursday' :
        $nestleWater = '<h2>Thursday is Deer Park Day!</h2>';
        $pic = 'deerPark.jpeg';
        $alt = 'Deer Park';
        break;

    case 'Friday' :
        $nestleWater = '<h2>Friday is Zephyrhills Day!</h2>';
        $pic = 'zephyrhills.jpeg';
        $alt = 'Zephyrhills';
        break;

    case 'Saturday' :
        $nestleWater = '<h2>Saturday is Nestle Pure Life Day!</h2>';
        $pic = 'nestlePureLife.jpeg';
        $alt = 'Nestle Pure Life';
        break;

    case '':
        break;
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch Classwork Exercise</title>
<style>
    #image {
        width: 600px;
    }
</style>
</head>

<body>
    <h1>My Wonderful Switch Classwork Exercise! </h1>
    <?php 
        echo $nestleWater;
    ?>
    <img id="image" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
</body>
</html>