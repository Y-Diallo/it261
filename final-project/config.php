<?php 
session_start();
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 
//instanciate/declare
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged on!';
$errors = array();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Why?';
$nav['project.php'] = 'Switches';
$nav['contact.php'] = 'Contact';

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
        $title = 'Home | We love mechanical keyboards';
        $body = 'home';
        $headline = 'We love mechanical keyboards';
        break;
    case 'about.php':
        $title = 'About | Great mechanical keyboards';
        $body = 'aboutBox';
        $headline = 'Database: We love mechanical keyboards';
        break;
    case 'daily.php':
        $title = 'Why? | What makes mechanical keyboards better?';
        $body = 'dailyBox';
        $headline = 'What makes mechanical keyboards better?';
        break;
    case 'project.php':
        $title = 'Switches';
        $body = 'projectBox';
        $headline = 'See the Switches!';
        break;
    case 'contact.php':
        $title = 'Contact Us';
        $body = 'contactBox';
        $headline = 'Contact Us';
        break;
    case 'project-view.php':
        $title = 'Switches';
        $body = 'defaultBox';
        $headline = 'See the Switches!';
    default:
        $title = "Youssoupha's it261 keyboard website";
        $body = 'defaultBox';
        $headline = 'Welcome to my Keyboard Website';
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
    $communication = '';
    $email = '';
    $perks[] = '';
    $switchtype = '';
    $comments = '';
    $privacy = '';
    $phone = '';

    //errors not in an array
    $first_name_Err = '';
    $last_name_Err = '';
    $communication_Err = '';
    $email_Err = '';
    $perks_Err = '';
    $switchtype_Err = '';
    $comments_Err = '';
    $privacy_Err = '';
    $phone_Err = '';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['first_name'])){//first name
            $first_name_Err = 'Please fill out your first name!';
        }else {
            $first_name = $_POST['first_name'];
        }
        if(empty($_POST['last_name'])){//last name
            $last_name_Err = 'Please fill out your last name!';
        }else {
            $last_name = $_POST['last_name'];
        }
        if(empty($_POST['communication'])){//communication
            $communication_Err = 'Please fill out your communication!';
        }else {
            $communication = $_POST['communication'];
        }
        if(empty($_POST['email'])){//email
            $email_Err = 'Please fill out your email!';
        }else {
            $email = $_POST['email'];
        }
        if(empty(implode($_POST['perks']))){//perks
            $perks_Err = 'Please select your task(s)!';
        }else {
            $perks = $_POST['perks'];
        }
        if($_POST['switchtype'] == NULL){//switchtype
            $switchtype_Err = 'Please select your color!';
        }else {
            $switchtype = $_POST['switchtype'];
        }
        if(empty($_POST['comments'])){//comments
            $comments_Err = 'Please fill out your comments!';
        }else {
            $comments = $_POST['comments'];
        }
        if(empty($_POST['privacy'])){//privacy
            $privacy_Err = 'Please agree!';
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

        function my_perks(){
            $my_return ='';
            if(!empty($_POST['perks'])){
                $my_return = implode(', ',$_POST['perks']);
                $my_return = str_replace('_', ' ', $my_return);
            }
            return $my_return;
        }

        if(isset($_POST['first_name'],$_POST['last_name'],$_POST['communication'],
        $_POST['email'],$_POST['perks'],$_POST['switchtype'],$_POST['comments'],$_POST['privacy'],$_POST['phone']) 
        && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){
            $to ='szemeo@mystudentswa.com';//
            $subject = 'Test Email';
            $body = '
            The first name is: '.$first_name.' '.PHP_EOL.'
            The last name is: '.$last_name.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Favorite Switchtype: '.$switchtype.' '.PHP_EOL.'
            perks: '.my_perks().' '.PHP_EOL.'
            Communication: '.$communication.' '.PHP_EOL.'
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
    $selected_image = ''.$photos[$i].'.png';
    echo '<img id="image" src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}


 

 

 

 

 

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}


        