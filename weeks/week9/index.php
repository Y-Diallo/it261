<?php 
session_start();
include('config.php');

$sql = 'SELECT * FROM people';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>testing week8 sql</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <table>
        <?php 
        
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
echo
'<tr>
<td><img src="images/'.(substr($row['email'],0, -9)).'.jpg" alt="'.$row['first_name'].' '.$row['last_name'].'"></td>
<td>'.$row['first_name'].' '.$row['last_name'].'</td>
<td>'.$row['occupation'].'</td>
<td><img src="images/'.(substr($row['email'],0, -8)).'.jpg" alt="'.$row['first_name'].' '.$row['last_name'].'"></td>
</tr>';
}
} else {

}

mysqli_free_result($result);
mysqli_close($iConn);

?>
    </table>
</body>
</html>