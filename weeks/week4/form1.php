<?php
// form working with values > html

if(isset($_POST['name'], $_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    if(empty($_POST['name'] && $_POST['email'])){
        echo 'Please fill out the fields!';
    } else {
        echo ''.$name.'<br>'.$email.'';
    }
} else {
    echo '
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="text" name="email">
        <input type="submit" value="Send it!!">
    </form>
    ';
}