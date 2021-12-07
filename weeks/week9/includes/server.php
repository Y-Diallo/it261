<?php
include('config.php');
if(isset($_GET['id'])){//something that represents being logged in
    $id = (int)$_GET['id'];
}

$sql = 'SELECT * FROM users WHERE user_id = '.$id.'';//whatever represents being logged in
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0){
    header('Location: index.php');
}