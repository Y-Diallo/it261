<!doctype html><!--missing doctype-->
<html lang="en"> <!--missing lang-->
<head>
<title>My Adder Assignment</title>
    <meta charset="UTF-8"> <!--missing charset-->
<style>

    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }

    
</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action method="post"><!--incorrect opening tag for form, needs method-->
    <label>Enter the first number:</label>
    <input type="text" name="num1"><br><!--bad capitlization on num1-->
    <label>Enter the second number:</label>
    <input type="text" name="num2"><br><!--no label opening tags, misplaced closing tags on both labels-->
    <input type="submit" value="Add Em!!"> <!--missing closing quote"-->
</form> 
<?php
    //adder-wrong.php <!--missplaced php--> 
    if (isset($_POST['num1'],$_POST['num2'])){//<!--does not check for num2-->
        $num1 = $_POST['num1'];
        $int_num1 = intval($num1);
        $num2 = $_POST['num2'];
        $int_num2 = intval($num2);
        //<!--may create int type errors if not using intval() -->
        $myTotal = $int_num1 + $int_num2; //<!--num2 is capitalized incorrectly--> used -= instead of =

        echo '<h2>You added '. $num1 .' and '.$num2.'</h2>'; //<!--used " instead of ' and didn't use any ' for the second Variable and missing </h2>-->
        echo '<p> and the answer is <br>'.$myTotal .'!</p>'; //<!--misplaced(outside of quotes) </p> closing tag, misplaced styles, used (") in place of (') in some instances

        echo '<p><a href="">Reset page</a></p>';//no closing </p> tag
    }
?><!--misplaced closing php tag-->
</body>
</html><!-- random ';{ at bottom of file-->