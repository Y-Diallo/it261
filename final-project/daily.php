<?php 
    include('config.php');
    include('includes/header.php');

    switch($today) {
        case 'Sunday' :
            $nestleWater = '<h2>Sunday is Arrowhead Day!</h2>';
            $pic = 'arrowhead.jpeg';
            $alt = 'Arrowhead';
            $color ='#d22';
            $content = 'At <b>Arrowhead®</b> Mountain Spring Water, we source our water from naturally occurring mountain springs in California, Colorado and Canada for communities in and west of the Rockies. From the way we source our water to the recycled plastic in our bottles, we believe there are a lot of things that put us a sip above the rest.';
            break;
    
        case 'Monday' :
            $nestleWater = '<h2>Monday is Poland Spring Day!</h2>';
            $pic = 'polandSpring.jpeg';
            $alt = 'Poland Spring';
            $color ='#22d';
            $content = 'A lot has changed since we got our start in 1845, but at least one thing remains the same: <b>Poland Spring®</b> Brand 100% Natural Spring Water is still sourced from our carefully selected springs in Maine.';
            break;
    
        case 'Tuesday' :
            $nestleWater = '<h2>Tuesday is Ozarka Day!</h2>';
            $pic = 'ozarka.jpeg';
            $alt = 'Ozarka';
            $color ='#2d2';
            $content = '<b>Ozarka®</b> Brand Natural Spring Water comes from three springs found right here in Texas. That\'s what gives it that fresh Texas taste that\'ll make you feel right at home.';
            break;
    
        case 'Wednesday' :
            $nestleWater = '<h2>Wednesday is Ice Mountain Day!</h2>';
            $pic = 'iceMountain.jpeg';
            $alt = 'Ice Mountain';
            $color ='#dd2';
            $content = 'Greatness is everywhere in the Midwest. This part of the country has vibrant cities, a sweet music scene, lakes for days and some of the nicest people around. Speaking of nice people, Midwesterners have been enjoying <b>Ice Mountain®</b> Brand 100% Natural Spring Water for many years. Where does our refreshing taste come from? It all starts at our springs.';
            break;
    
        case 'Thursday' :
            $nestleWater = '<h2>Thursday is Deer Park Day!</h2>';
            $pic = 'deerPark.jpeg';
            $alt = 'Deer Park';
            $color ='#2dd';
            $content = '<b>Deer Park®</b> Brand 100% Natural Spring Water is sourced from springs across the region: from the heart of Pennsylvania to the panhandle of Maryland to the northern border of South Carolina — and beyond. The crisp, clean taste is natural refreshment at its finest.';
            break;
    
        case 'Friday' :
            $nestleWater = '<h2>Friday is Zephyrhills Day!</h2>';
            $pic = 'zephyrhills.jpg';
            $alt = 'Zephyrhills';
            $color ='#d2d';
            $content = 'In Florida, you\'ll find miles of oceanfront, 12 months of sunshine and some of the friendliest people you\'ve ever met. But our best-kept secrets are the springs that give us the fresh-tasting <b>Zephyrhills®</b> Brand Natural Spring Water that folks from Florida are lucky enough to enjoy.';
            break;
    
        case 'Saturday' :
            $nestleWater = '<h2>Saturday is Nestle Pure Life Day!</h2>';
            $pic = 'nestlePureLife.jpeg';
            $alt = 'Nestle Pure Life';
            $color ='#ddd';
            $content = '<b>Nestlé® Pure Life®</b> puts great tasting bottled drinking water in easy reach of your family using a rigorous quality process. That’s how we can make sure it meets our high safety standards, and tastes great too.';
            break;
    
        case '':
            break;
    }
?>
<div id="wrapper">
    
        <main>
        <div class="inset" styles="background=<?php echo $color?>;">
        <h1><?php echo $headline;?></h1>
        <?php echo $nestleWater;?>
        <p><?php echo $content;?></p>
        
        <h2>Check out our Daily Specials</h2>

        <ul>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
    </main>

    <aside>
    <img id="image" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">

    </aside>
<?php 
include('includes/footer.php');
?>
            