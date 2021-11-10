<?php 

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

//nav function

function my_nav($nav){
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key){
            $my_return.= '<li><a class="current" href="'.$key.'"> '.$value.'  </a></li>';
        }else {
            $my_return.= '<li><a href="'.$key.'"> '.$value.'  </a></li>';
        }
    }
    return $my_return;
}

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


//emailable form php!
?>