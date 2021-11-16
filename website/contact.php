<?php 
    include('config.php');
    include('includes/header.php');
?>
<div id="wrapper">
    <main>
    <h1><?php echo $headline;?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <h2>Please fill out our form!</h2>
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
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" placeholder="xxx-xxx-xxxx"value="<?php if(isset($_POST['phone'])){ echo htmlspecialchars($_POST['phone']);} ?>">
        <?php echo $phone_Err?>

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
        <textarea name="comments"><?php if(isset($_POST['comments'])){ echo htmlspecialchars($_POST['comments']);} ?></textarea>
        <?php echo $comments_Err?>

        <label for="privacy">Privacy</label>
        <ul>
            <li><input type="radio" id="agreed" name="privacy" value="agreed"
            <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agreed'){ echo 'checked="checked"';}?>
            ><label for="agreed">I agree!</label></li>
        </ul>
        <?php echo $privacy_Err?>

        <input type="submit" value="Submit!">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>
    </main>

    <aside>
    <h3>Our Aside for our Form</h3>
    <img src="" alt=""><!--picture related to form-->
    </aside>
<?php 
include('includes/footer.php');
?>
            