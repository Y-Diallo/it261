
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Travel Calculator</title>
<link href="css/calculator.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h1>Travel Calculator</h1>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo htmlspecialchars($_POST['name']);} ?>">

        <label for="miles">How many miles?</label>
        <input type="text" name="miles" value="<?php if(isset($_POST['miles'])){ echo htmlspecialchars($_POST['miles']);} ?>">

        <label for="hours">How many hours per day?</label>
        <input type="text" name="hours" value="<?php if(isset($_POST['hours'])){ echo htmlspecialchars($_POST['hours']);} ?>">

        <label for="price">How much is your gas?</label>
        <ul>
            <li><input type="radio" id="rubles" name="price" value="3"
            <?php if(isset($_POST['price']) && $_POST['price'] == '3'){ echo 'checked="checked"';}?>
            >$3.00</li>
            <li><input type="radio" id="canadian" name="price" value="3.5"
            <?php if(isset($_POST['price']) && $_POST['price'] == '3.5'){ echo 'checked="checked"';}?>
            >$3.50</li>
            <li><input type="radio" id="pounds" name="price" value="4"
            <?php if(isset($_POST['price']) && $_POST['price'] == '4'){ echo 'checked="checked"';}?>
            >$4.00</li>
        </ul>

        <label for="MPG">Choose your MPG</label>
        <select name="MPG">
            <option value="" NULL 
            <?php if(isset($_POST['MPG']) && $_POST['MPG'] == NULL){ echo 'selected="unselected"';}?>
            >Select one!</option>
            <option value="10"
            <?php if(isset($_POST['MPG']) && $_POST['MPG'] == '10'){ echo 'selected="selected"';}?>
             >Terrible</option>
            <option value="20"
            <?php if(isset($_POST['MPG']) && $_POST['MPG'] == '20'){ echo 'selected="selected"';}?>
              >Getting better</option>
            <option value="30"
            <?php if(isset($_POST['MPG']) && $_POST['MPG'] == '30'){ echo 'selected="selected"';}?>
              >Good</option>
            <option value="40"
            <?php if(isset($_POST['MPG']) && $_POST['MPG'] == '40'){ echo 'selected="selected"';}?>
              >Great</option>
        </select>
        <input type="submit" value="Calculate!" class="button">
        <p><a href="" class="button">Reset</a></p>
    </fieldset>
</form>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['name'])){
        echo '<span class="error">Please fill out your name!</span>';
    }
    if(empty($_POST['miles'])){
        echo '<span class="error">Please fill out your number of miles!</span>';
    }
    if(empty($_POST['hours'])){
        echo '<span class="error">Please fill out your amount of hours!</span>';
    }
    if(empty($_POST['price'])){
        echo '<span class="error">Please select your gas price!</span>';
    }
    if($_POST['MPG'] == NULL){
        echo '<span class="error">Please select your MPG!</span>';
    }
    if(!empty($_POST['miles']) && !is_numeric($_POST['miles'])){
        echo '<span class="error">Please fill out a valid miles value!</span>';
    }
    if(!empty($_POST['hours']) && !is_numeric($_POST['hours'])){
        echo '<span class="error">Please fill out a valid hours value!</span>';
    }
    
    if(isset($_POST['name'],$_POST['miles'],$_POST['hours'],$_POST['price']) && is_numeric($_POST['hours'])&& is_numeric($_POST['miles'])){
        $name = $_POST['name'];
        $miles = $_POST['miles'];
        $hours = $_POST['hours'];
        $price = $_POST['price'];
        $MPG = $_POST['MPG'];
        $speed = 65;//65 mph
        $gallons = $miles/$MPG;
        $total = $gallons*$price;
        $friendly_total = @number_format($total, 2);
        $totalTime = $miles/$speed;// miles/mph = h
        $friendly_time = ceil($totalTime);
        $days = $totalHours/$hours;//total time traveled over time per day
        $friendly_days = ceil($days);
        
        
        echo '
        <div class="box">
            <h2>Calculator Results</h2>
            <p> '.$name.', you will be driving <b>'.$miles.' miles</b><br>
            Your vehicle has an efficieny rating of <b>'.$MPG.' miles per gallon</b>
            Your total cost for gas will be <b>$'.$friendly_total.' dollars</b>
            You will be driving a total of <b>'.$friendly_time.' hours equating to '.$friendly_days.' days</b>
            </p>
            
        </div>';
    }
}


?>
</body>
</html>