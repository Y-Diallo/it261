<!-- ALL ERRORS AT BOTTOM OF PAGE AS WELL AS IN LINE-->
<!-- ALL ERRORS AT BOTTOM OF PAGE AS WELL AS IN LINE-->
<!doctype html><!--missing doctype-->
<html lang="en"> <!--missing lang-->
<head>
<title>My Adder Assignment</title>
    <meta charset="UTF-8"> <!--missing charset-->
    <!-- added styles -->
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
<form action method="post"><!--incorrect opening tag for form, needs method="post"-->
    <label>Enter the first number:</label>
    <input type="text" name="num1"><br><!--bad capitlization on num1-->
    <label>Enter the second number:</label>
    <input type="text" name="num2"><br><!--no label opening tags, misplaced closing tags-->
    <input type="submit" value="Add Em!!"> <!--missing closing double quote-->
</form> 
<?php
    //misplaced php above doctype
    if (isset($_POST['num1'],$_POST['num2'])){//does not check for num2
        $num1 = $_POST['num1'];
        $int_num1 = intval($num1);
        $num2 = $_POST['num2'];
        $int_num2 = intval($num2);
        //may create int type errors if not using intval()
        $myTotal = $int_num1 + $int_num2; //num2 is capitalized incorrectly, used -= instead of =

        echo '<h2>You added '. $num1 .' and '.$num2.'</h2>'; //used " instead of ' and didn't use any ' for the second Variable and missing </h2>
        echo '<p> and the answer is <br>'.$myTotal .'!</p>'; //misplaced(outside of quotes) </p> closing tag, misplaced styles, used (") in place of (') in some instances

        echo '<p><a href="">Reset page</a></p>';//no closing </p> tag
    }
?><!--misplaced closing php tag-->
</body>
</html><!-- random ';{ at bottom of file-->

<!--
lines - errors
3 - missing doctype
4 - missing lang
7 - missing charset
8 - added styles
41 - incorrect opening tag for form, needs method="post"
43 - bad capitlization on num1
42&44 - no label opening tags
44 - misplaced closing tag
46 - missing closing double quote
49 - misplaced php above doctype
50 - does not check for num2
56 - may create int type errors if not using intval(),
     num2 is capitalized incorrectly,
     used -= instead of =
58 - used double quote instead of single quote,
     didn't use any single quotes for the second variable,
     missing </h2> closing tag
59 - misplaced(outside of quotes) </p> closing tag,
     misplaced styles,
     used (") in place of (') in some instances
61 - no closing </p> tag
63 - misplaced closing php tag
65 - random ';{ at bottom of file
-->