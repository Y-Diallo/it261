<?php 
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 

 

 

 

 

 

 

 

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

//form php
    $first_name = '';
    $last_name = '';
    $email = '';
    $username = '';
    $password_1 = '';
    $password_2 = '';

    $first_name_Err = '';
    $last_name_Err = '';
    $email_Err = '';
    $username_Err = '';
    $password_1_Err = '';
    $password_2_Err = '';

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
        if(empty($_POST['email'])){//email
            $email_Err = '<span class="error">Please fill out your email!</span>';
        }else {
            $email = $_POST['email'];
        }
        if(empty($_POST['username'])){//username
            $username_Err = '<span class="error">Please fill out your username!</span>';
        }else {
            $username = $_POST['username'];
        }
        if(empty($_POST['password_1'])){//password
            $password_1_Err = '<span class="error">Please fill out your password!</span>';
        }else {
            $password_1 = $_POST['password_1'];
        }
        if(empty($_POST['password_2'])){//email
            $password_2_Err = '<span class="error">Please fill out your confirm password!</span>';
        }elseif ($_POST['password_2'] !== $_POST['password']){
            $password_2_Err = '<span class="error">Passwords must match!</span>';
        }else {
            $password_2 = $_POST['password_2'];
        }

        if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],
        $_POST['username'],$_POST['password_1'],$_POST['password_2'])){
            $sql_command = '';
            header('Location: login.php');
        }
        if(!isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],
        $_POST['password_2']) && isset($_POST['username'],$_POST['password_1'])){
            $sql_command = '';
            header('Location: index.php');
        }
        
    }
        