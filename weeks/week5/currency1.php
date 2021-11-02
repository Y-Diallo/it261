
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Basic Currency Form</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="money">How much money do you have?</label>
        <input type="number" name="money">
        <label for="currency">Choose your currency</label>
        
        <ul>
            <li><input type="radio" id="rubles" name="currency" value="0.013">
            <label for="rubles">Rubles</label></li>
            <li><input type="radio" id="canadian" name="currency" value="0.76">
            <label for="canadian">Canadian</label></li>
            <li><input type="radio" id="pounds" name="currency" value="1.28">
            <label for="pounds">Pounds</label></li>
            <li><input type="radio" id="euros" name="currency" value="1.18">
            <label for="euros">Euros</label></li>
            <li><input type="radio" id="yen" name="currency" value="0.0094">
            <label for="yen">Yen</label></li>
        </ul>
        <input type="submit" value="Convert!">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['name'] && $_POST['email'] && $_POST['money'] && $_POST['currency'])){
        echo '<h2>Please fill out all the fields!</h2>';
    }elseif(isset($_POST['name'],$_POST['email'],$_POST['money'],$_POST['currency'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $money = $_POST['money'];
        $currency = $_POST['currency'];
        $dollars = $money*$currency;
        
        $friendly_dollars = floor($dollars);
        echo '
        <div class="box">
            <h2>Hello'.$name.'</h2>
            <p> You now have $'.$friendly_dollars.
            ' USD, and we will be sending you an email at: <b>'.$email.'</b> !</p><br>
            
        </div>';
    }
}


?>
</body>
</html>