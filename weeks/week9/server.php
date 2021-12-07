<?php

session_start();

include('config.php');
include('includes/header.php');


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

if(isset($_POST['reg_user'])){//something that represents being registered in
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);


    if(empty($first_name)){//first name
        array_push($errors, '<span class="error">Please fill out your first name!</span>');
    }
    if(empty($last_name)){//last name
        array_push($errors, '<span class="error">Please fill out your last name!</span>');
    }
    if(empty($email)){//email
        array_push($errors, '<span class="error">Please fill out your email!</span>');
    }
    if(empty($username)){//username
        array_push($errors, '<span class="error">Please fill out your username!</span>');
    }
    if(empty($password_1)){//password
        array_push($errors, '<span class="error">Please fill out your password!</span>');
    }
    if(empty($password_2)){//email
        array_push($errors, '<span class="error">Please fill out your confirm password!</span>');
    }elseif (empty($password_2) && $password_2 !== $password_1){
        array_push($errors, '<span class="error">Please fill out your confirm password!</span>');
    }elseif ($password_2 !== $password_1){
        array_push($errors, '<span class="error">Passwords must match!</span>');
    }

    $user_check_query = "SELECT * FROM users WHERE username= '$username' OR email = '$email' LIMIT 1"; //checks all users for clash
    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
    $rows = mysqli_fetch_assoc($result);
    if($rows){
        if($rows['username'] == $username){
            array_push($errors, '<span class="error">Username already exists!</span>');
        }

        if($rows['email'] == $email){
            array_push($errors, '<span class="error">Email already exists!</span>');
        }

    }

    if(count($errors)<1){
        //md5 gives a 32 hex char value for password
        $password = md5($password_1);//not storing passwords

        $query = "INSERT INTO users(first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        header('Location: login.php');
    }
}

if(isset($_POST['login_user'])){//something that represents being registered in
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);


    if(empty($username)){//username
        array_push($errors, '<span class="error">Please fill out your username!</span>');
    }
    if(empty($password)){//password
        array_push($errors, '<span class="error">Please fill out your password!</span>');
    }

    if(empty($errors)){
        $password = md5($password);
    

    $query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";

    $results = mysqli_query($iConn, $query);

        if(mysqli_num_rows($results)==1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            header('Location: index.php');
        }else {
            array_push($errors,'<span class="error">Wrong Username/Password Combo</span>');
        }
    }

}