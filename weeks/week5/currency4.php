
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency Form #4 EC!</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h1>Extra Credit</h1>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo htmlspecialchars($_POST['name']);} ?>">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo htmlspecialchars($_POST['email']);} ?>">
        <label for="money">How much money do you have?</label>
        <input type="text" name="money" value="<?php if(isset($_POST['money'])){ echo htmlspecialchars($_POST['money']);} ?>">
        <label for="currency">Choose your currency</label>
        <ul>
            <li><input type="radio" id="rubles" name="currency" value="0.013"
            <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013'){ echo 'checked="checked"';}?>
            >Rubles</li>
            <li><input type="radio" id="canadian" name="currency" value="0.76"
            <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76'){ echo 'checked="checked"';}?>
            >Canadian</li>
            <li><input type="radio" id="pounds" name="currency" value="1.28"
            <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28'){ echo 'checked="checked"';}?>
            >Pounds</li>
            <li><input type="radio" id="euros" name="currency" value="1.18"
            <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18'){ echo 'checked="checked"';}?>
            >Euros</li>
            <li><input type="radio" id="yen" name="currency" value="0.0094"
            <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094'){ echo 'checked="checked"';}?>
            >Yen</li>
        </ul>

        <label for="bank">Choose your bank</label>
        <select name="bank">
            <option value="" NULL 
            <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL){ echo 'selected="unselected"';}?>
            >Select one!</option>
            <option value="BOA"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BOA'){ echo 'selected="selected"';}?>
             >Bank of America</option>
            <option value="key"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'key'){ echo 'selected="selected"';}?>
              >Key Bank</option>
            <option value="chase"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase'){ echo 'selected="selected"';}?>
              >Chase</option>
            <option value="BECU"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU'){ echo 'selected="selected"';}?>
              >Boeing Credit Union</option>
            <option value="mattress"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'mattress'){ echo 'selected="selected"';}?>
              >Mattress</option>
        </select>
        <input type="submit" value="Convert!">
        <p><a href="" class="button">Reset</a></p><!--finish button-->
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
    
    if(isset($_POST['name'],$_POST['email'],$_POST['money'],$_POST['currency']) && is_numeric($_POST['money'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $money = $_POST['money'];
        $currency = $_POST['currency'];
        $bank = $_POST['bank'];
        $dollars = $money*$currency;
        
        $friendly_dollars = number_format($dollars);

        if($friendly_dollars > 1000){
            echo '
            <div class="veryhappy">
                <h2>I am <b>very</b> happy because I have '.$friendly_dollars.'</h2>
                <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            ';//add video and styles
        }elseif($friendly_dollars > 100){
            echo '
            <div class="happy">
                <h2>I am happy because I have '.$friendly_dollars.'</h2>
                <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            ';//add video and styles
        }else{
            echo '
            <div class="sad">
                <h2>I am sad because I have '.$friendly_dollars.'</h2>
                <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            ';//add video and styles
        }
    }
}


?>
</body>
</html>