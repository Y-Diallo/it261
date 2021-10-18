<?php 
    include('includes/header.php');

    switch($today) {
        case 'Sunday' :
            $nestleWater = '<h2>Sunday is Arrowhead Day!</h2>';
            $pic = 'arrowhead.jpeg';
            $alt = 'Arrowhead';
            $content = 'At <b>Arrowhead®</b> Mountain Spring Water, we source our water from naturally occurring mountain springs in California, Colorado and Canada for communities in and west of the Rockies. From the way we source our water to the recycled plastic in our bottles, we believe there are a lot of things that put us a sip above the rest.';
            break;
    
        case 'Monday' :
            $nestleWater = '<h2>Monday is Poland Spring Day!</h2>';
            $pic = 'polandSpring.jpeg';
            $alt = 'Poland Spring';
            $content = 'A lot has changed since we got our start in 1845, but at least one thing remains the same: <b>Poland Spring®</b> Brand 100% Natural Spring Water is still sourced from our carefully selected springs in Maine.';
            break;
    
        case 'Tuesday' :
            $nestleWater = '<h2>Tuesday is Ozarka Day!</h2>';
            $pic = 'ozarka.jpeg';
            $alt = 'Ozarka';
            $content = '<b>Ozarka®</b> Brand Natural Spring Water comes from three springs found right here in Texas. That\'s what gives it that fresh Texas taste that\'ll make you feel right at home.';
            break;
    
        case 'Wednesday' :
            $nestleWater = '<h2>Wednesday is Ice Mountain Day!</h2>';
            $pic = 'iceMountain.jpeg';
            $alt = 'Ice Mountain';
            $content = 'Greatness is everywhere in the Midwest. This part of the country has vibrant cities, a sweet music scene, lakes for days and some of the nicest people around. Speaking of nice people, Midwesterners have been enjoying <b>Ice Mountain®</b> Brand 100% Natural Spring Water for many years. Where does our refreshing taste come from? It all starts at our springs.';
            break;
    
        case 'Thursday' :
            $nestleWater = '<h2>Thursday is Deer Park Day!</h2>';
            $pic = 'deerPark.jpeg';
            $alt = 'Deer Park';
            $content = '<b>Deer Park®</b> Brand 100% Natural Spring Water is sourced from springs across the region: from the heart of Pennsylvania to the panhandle of Maryland to the northern border of South Carolina — and beyond. The crisp, clean taste is natural refreshment at its finest.';
            break;
    
        case 'Friday' :
            $nestleWater = '<h2>Friday is Zephyrhills Day!</h2>';
            $pic = 'zephyrhills.jpg';
            $alt = 'Zephyrhills';
            $content = 'In Florida, you\'ll find miles of oceanfront, 12 months of sunshine and some of the friendliest people you\'ve ever met. But our best-kept secrets are the springs that give us the fresh-tasting <b>Zephyrhills®</b> Brand Natural Spring Water that folks from Florida are lucky enough to enjoy.';
            break;
    
        case 'Saturday' :
            $nestleWater = '<h2>Saturday is Nestle Pure Life Day!</h2>';
            $pic = 'nestlePureLife.jpeg';
            $alt = 'Nestle Pure Life';
            $content = '<b>Nestlé® Pure Life®</b> puts great tasting bottled drinking water in easy reach of your family using a rigorous quality process. That’s how we can make sure it meets our high safety standards, and tastes great too.';
            break;
    
        case '':
            break;
    }
?>
<div id="wrapper">

    <main>
    <h1><?php echo $headline;?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </main>

    <aside>


    </aside>
<?php 
include('includes/footer.php');
?>
            