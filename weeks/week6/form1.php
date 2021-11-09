
<?php


?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Emailable Form Number 1</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name">
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

        <label for="bank">Choose your bank</label>
        <select name="bank">
            <option value="" NULL>Select one!</option>
            <option value="BOA" >Bank of America</option>
            <option value="key" >Key Bank</option>
            <option value="chase" >Chase</option>
            <option value="BECU" >Boeing Credit Union</option>
            <option value="mattress" >Mattress</option>
        </select>
        <input type="submit" value="Convert!">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['name'])){
        echo '<span class="error">Please fill out your name!</span>';
    }
    if(empty($_POST['email'])){
        echo '<span class="error">Please fill out your email!</span>';
    }
    if(empty($_POST['money'])){
        echo '<span class="error">Please fill out your amount of money!</span>';
    }
    if(empty($_POST['currency'])){
        echo '<span class="error">Please select your currency!</span>';
    }
    if($_POST['bank'] == NULL){
        echo '<span class="error">Please select your bank!</span>';
    }
    
    if(isset($_POST['name'],$_POST['email'],$_POST['money'],$_POST['currency'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $money = $_POST['money'];
        $currency = $_POST['currency'];
        $bank = $_POST['bank'];
        $dollars = $money*$currency;
        
        $friendly_dollars = floor($dollars);
        echo '
        <div class="box">
            <h2>Hello'.$name.'</h2>
            <p> You now have $'.$friendly_dollars.
            ' USD, and it will be deposited in <b>'.$bank.'</b> and we will be sending you an email at: <b>'.$email.'</b> in the next 24hours!</p><br>
            
        </div>';
    }
}


?>
</body>
</html>