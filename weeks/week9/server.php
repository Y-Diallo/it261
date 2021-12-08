<?php

session_start();

include('config.php');
// include('includes/header.php');


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

if(isset($_POST['reg_user'])){//something that represents being registered in
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);


    if(empty($first_name)){//first name
        array_push($errors, 'Please fill out your first name!');
    }
    if(empty($last_name)){//last name
        array_push($errors, 'Please fill out your last name!');
    }
    if(empty($email)){//email
        array_push($errors, 'Please fill out your email!');
    }
    if(empty($username)){//username
        array_push($errors, 'Please fill out your username!');
    }
    if(empty($password_1)){//password
        array_push($errors, 'Please fill out your password!');
    }
    if(empty($password_2)){//email
        array_push($errors, 'Please fill out your confirm password!');
    }elseif (empty($password_2) && $password_2 !== $password_1){
        array_push($errors, 'Please fill out your confirm password!');
    }elseif ($password_2 !== $password_1){
        array_push($errors, 'Passwords must match!');
    }

    $user_check_query = "SELECT * FROM users WHERE username= '$username' OR email = '$email' LIMIT 1"; //checks all users for clash
    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
    $rows = mysqli_fetch_assoc($result);
    if($rows){
        if($rows['username'] == $username){
            array_push($errors, 'Username already exists!');
        }

        if($rows['email'] == $email){
            array_push($errors, 'Email already exists!');
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
        array_push($errors, 'Please fill out your username!');
    }
    if(empty($password)){//password
        array_push($errors, 'Please fill out your password!');
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
            array_push($errors,'Wrong Username/Password Combo');
        }
    }

}