
<?php

$first_name = '';
$last_name = '';
$gender = '';
$email = '';
$wines = '';
$regions = '';
$comments = '';
$privacy = '';

$first_name_Err = '';
$last_name_Err = '';
$gender_Err = '';
$email_Err = '';
$wines_Err = '';
$regions_Err = '';
$comments_Err = '';
$privacy_Err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['first_name'])){//first name
        $first_name_Err = '<span class="error">Please fill out your first name!</span>';
    }else {
        $first_name = $_POST['first_name'];
    }
    if(empty($_POST['last_name'])){//last name
        $last_name_Err = '<span class="error">Please fill out your last name!</span>';
    }else {
        $last_name = $_POST['last_name'];
    }
    if(empty($_POST['gender'])){//gender
        $gender_Err = '<span class="error">Please fill out your gender!</span>';
    }else {
        $gender = $_POST['gender'];
    }
    if(empty($_POST['email'])){//email
        $email_Err = '<span class="error">Please fill out your email!</span>';
    }else {
        $email = $_POST['email'];
    }
    if(empty(implode($_POST['wines']))){//wines
        $wines_Err = '<span class="error">Please select your wine(s)!</span>';
    }else {
        $wines = $_POST['wines'];
    }
    if($_POST['regions'] == NULL){//regions
        $regions_Err = '<span class="error">Please select your region!</span>';
    }else {
        $regions = $_POST['regions'];
    }
    if(empty($_POST['comments'])){//comments
        $comments_Err = '<span class="error">Please fill out your comments!</span>';
    }else {
        $comments = $_POST['comments'];
    }
    if(empty($_POST['privacy'])){//privacy
        $privacy_Err = '<span class="error">Please agree!</span>';
    }else {
        $privacy = $_POST['privacy'];
    }
}

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
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])){ echo htmlspecialchars($_POST['first_name']);} ?>">
        <?php echo $first_name_Err?>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){ echo htmlspecialchars($_POST['last_name']);} ?>">
        <?php echo $last_name_Err?>
        <label for="email">Email</label>
        <input type="text" name="email"value="<?php if(isset($_POST['email'])){ echo htmlspecialchars($_POST['email']);} ?>">
        <?php echo $email_Err?>

        <label for="gender">Gender</label>
        <ul>
            <li><input type="radio" id="male" name="gender" value="male"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male'){ echo 'checked="checked"';}?>><label for="male">Male</label></li>
            <li><input type="radio" id="female" name="gender" value="female"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female'){ echo 'checked="checked"';}?>><label for="female">Female</label></li>
            <li><input type="radio" id="other" name="gender" value="other"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other'){ echo 'checked="checked"';}?>><label for="other">Other</label></li>
        </ul>
        <?php echo $gender_Err?>

        <label for="wines">Favorite Wines</label>
        <ul>
            <li><input type="checkbox" id="cab" name="wines[]" value="cab"
            <?php if(isset($_POST['wines']) && in_array('cab',$wines)){ echo 'checked="checked"';}?>><label for="cab">Cabernet</label></li>
            <li><input type="checkbox" id="mer" name="wines[]" value="mer"
            <?php if(isset($_POST['wines']) && in_array('mer',$wines)){ echo 'checked="checked"';}?>><label for="mer">Merlot</label></li>
            <li><input type="checkbox" id="syrah" name="wines[]" value="syrah"
            <?php if(isset($_POST['wines']) && in_array('syrah',$wines)){ echo 'checked="checked"';}?>><label for="syrah">Syrah</label></li>
            <li><input type="checkbox" id="malbec" name="wines[]" value="malbec"
            <?php if(isset($_POST['wines']) && in_array('malbec',$wines)){ echo 'checked="checked"';}?>><label for="malbec">Malbec</label></li>
            <li><input type="checkbox" id="blend" name="wines[]" value="blend"
            <?php if(isset($_POST['wines']) && in_array('blend',$wines)){ echo 'checked="checked"';}?>><label for="blend">Red Blend</label></li>
        </ul>
        <?php echo $wines_Err?>

        <label for="regions">Regions</label>
        <select name="regions">
            <option value="" NULL 
            <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL){ echo 'selected="unselected"';}?>>Select one!</option>
            <option value="nw" 
            <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw'){ echo 'selected="selected"';}?>
            >Northwest</option>
            <option value="sw" 
            <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw'){ echo 'selected="selected"';}?>
            >Southwest</option>
            <option value="mw" 
            <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw'){ echo 'selected="selected"';}?>
            >Midwest</option>
            <option value="ne" 
            <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne'){ echo 'selected="selected"';}?>
            >Northeast</option>
            <option value="se" 
            <?php if(isset($_POST['regions']) && $_POST['regions'] == 'se'){ echo 'selected="selected"';}?>
            >Southeast</option>
            <option value="so" 
            <?php if(isset($_POST['regions']) && $_POST['regions'] == 'so'){ echo 'selected="selected"';}?>
            >South</option>
        </select>
        <?php echo $regions_Err?>

        <label for="comments">Comments</label>
        <textarea name="comments" value="<?php if(isset($_POST['comments'])){ echo htmlspecialchars($_POST['comments']);} ?>"></textarea>
        <?php echo $comments_Err?>

        <label for="privacy">Privacy</label>
        <ul>
            <li><input type="radio" id="agreed" name="privacy" value="agreed"
            <?php if(isset($_POST['privacy']) && $_POST['price'] == 'agreed'){ echo 'checked="checked"';}?>
            ><label for="agreed">I agree!</label></li>
        </ul>
        <?php echo $privacy_Err?>

        <input type="submit" value="Convert!">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>
</body>
</html>