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
    $first_name = '';
    $last_name = '';
    $gender = '';
    $email = '';
    $wines[] = '';
    $regions = '';
    $comments = '';
    $privacy = '';
    $phone = '';

    $first_name_Err = '';
    $last_name_Err = '';
    $gender_Err = '';
    $email_Err = '';
    $wines_Err = '';
    $regions_Err = '';
    $comments_Err = '';
    $privacy_Err = '';
    $phone_Err = '';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['first_name'])){//first name
            $first_name_Err = '<span class="error">Please fill out your first name!</span>';
        }else {
            $first_name = $_POST['first_name'];
        }
        if(empty($_POST['last_name'])){//last name
            $last_name_Err = '<span class="error">Please fill out your last name!</span>';
        }else {
            $last_name = $_POST['last_name'];
        }
        if(empty($_POST['gender'])){//gender
            $gender_Err = '<span class="error">Please fill out your gender!</span>';
        }else {
            $gender = $_POST['gender'];
        }
        if(empty($_POST['email'])){//email
            $email_Err = '<span class="error">Please fill out your email!</span>';
        }else {
            $email = $_POST['email'];
        }
        if(empty(implode($_POST['wines']))){//wines
            $wines_Err = '<span class="error">Please select your wine(s)!</span>';
        }else {
            $wines = $_POST['wines'];
        }
        if($_POST['regions'] == NULL){//regions
            $regions_Err = '<span class="error">Please select your region!</span>';
        }else {
            $regions = $_POST['regions'];
        }
        if(empty($_POST['comments'])){//comments
            $comments_Err = '<span class="error">Please fill out your comments!</span>';
        }else {
            $comments = $_POST['comments'];
        }
        if(empty($_POST['privacy'])){//privacy
            $privacy_Err = '<span class="error">Please agree!</span>';
        }else {
            $privacy = $_POST['privacy'];
        }
        if(empty($_POST['phone'])) {  // if empty, type in your number
            $phone_Err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
            { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
                $phone_Err = 'Invalid format!';
            } else{
                $phone = $_POST['phone'];
            }
        }

        function my_wines(){
            $my_return ='';
            if(!empty($_POST['wines'])){
                $my_return = implode(', ',$_POST['wines']);
            }
            return $my_return;
        }

        if(isset($_POST['first_name'],$_POST['last_name'],$_POST['gender'],
        $_POST['email'],$_POST['wines'],$_POST['regions'],$_POST['comments'],$_POST['privacy'],$_POST['phone'])){
            $to ='fandy107@gmail.com';
            $subject = 'Test Email';
            $body = '
            The first name is: '.$first_name.' '.PHP_EOL.'
            The last name is: '.$last_name.' '.PHP_EOL.'
            Gender: '.$gender.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Region: '.$regions.' '.PHP_EOL.'
            Wines: '.my_wines().' '.PHP_EOL.'
            Comments: '.$comments.' '.PHP_EOL.'
            ';

            $headers = array(
                'From' => 'noreply@mystudentswa.com',
                'Reply-to' => ''.$email.''
            );
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        }
    }

// random images
function random_pics($photos){
    $i = rand(0,(count($photos)-1));
    $selected_image = ''.$photos[$i].'.jpg';
    echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}
?>