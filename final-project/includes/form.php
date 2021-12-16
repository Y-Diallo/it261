<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
        <span class="label">First Name</span>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])){ echo htmlspecialchars($_POST['first_name']);} ?>">
        <span class="error"><?php echo $first_name_Err?></span>
        <span class="label">Last Name</span>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){ echo htmlspecialchars($_POST['last_name']);} ?>">
        <span class="error"><?php echo $last_name_Err?></span>
        <span class="label">Email</span>
        <input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo htmlspecialchars($_POST['email']);} ?>">
        <span class="error"><?php echo $email_Err?></span>
        <span class="label">Phone Number</span>
        <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])){ echo htmlspecialchars($_POST['phone']);} ?>">
        <span class="error"><?php echo $phone_Err?></span>

        <span class="label">Gender</span>
        <ul>
            <li><input type="radio" id="male" name="gender" value="male"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male'){ echo 'checked="checked"';}?>><label for="male">Male</label></li>
            <li><input type="radio" id="female" name="gender" value="female"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female'){ echo 'checked="checked"';}?>><label for="female">Female</label></li>
            <li><input type="radio" id="other" name="gender" value="other"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other'){ echo 'checked="checked"';}?>><label for="other">Other</label></li>
        </ul>
        <span class="error"><?php echo $gender_Err?></span>

        <span class="label">Favorite Tasks</span>
        <ul>
            <li><input type="checkbox" id="admin" name="tasks[]" value="admin"
            <?php if(isset($_POST['tasks']) && in_array('admin',$tasks)){ echo 'checked="checked"';}?>><label for="admin">Admin</label></li>
            <li><input type="checkbox" id="electrical" name="tasks[]" value="electrical"
            <?php if(isset($_POST['tasks']) && in_array('electrical',$tasks)){ echo 'checked="checked"';}?>><label for="electrical">Electrical</label></li>
            <li><input type="checkbox" id="medbay" name="tasks[]" value="medbay"
            <?php if(isset($_POST['tasks']) && in_array('medbay',$tasks)){ echo 'checked="checked"';}?>><label for="medbay">MedBay</label></li>
            <li><input type="checkbox" id="oxygen" name="tasks[]" value="oxygen"
            <?php if(isset($_POST['tasks']) && in_array('oxygen',$tasks)){ echo 'checked="checked"';}?>><label for="oxygen">O2</label></li>
            <li><input type="checkbox" id="engine" name="tasks[]" value="engine"
            <?php if(isset($_POST['tasks']) && in_array('engine',$tasks)){ echo 'checked="checked"';}?>><label for="engine">Engine</label></li>
        </ul>
        <span class="error"><?php echo $tasks_Err?></span>

        <span class="label">Among Us Color</span>
        <select name="colors">
            <option value="" 
            <?php if(isset($_POST['colors']) && $_POST['colors'] == NULL){ echo 'selected="unselected"';}?>>Select one!</option>
            <option value="red" 
            <?php if(isset($_POST['colors']) && $_POST['colors'] == 'red'){ echo 'selected="selected"';}?>
            >Red</option>
            <option value="ble" 
            <?php if(isset($_POST['colors']) && $_POST['colors'] == 'ble'){ echo 'selected="selected"';}?>
            >Blue</option>
            <option value="grn" 
            <?php if(isset($_POST['colors']) && $_POST['colors'] == 'grn'){ echo 'selected="selected"';}?>
            >Green</option>
            <option value="pik" 
            <?php if(isset($_POST['colors']) && $_POST['colors'] == 'pik'){ echo 'selected="selected"';}?>
            >Pink</option>
            <option value="whe" 
            <?php if(isset($_POST['colors']) && $_POST['colors'] == 'whe'){ echo 'selected="selected"';}?>
            >White</option>
            <option value="blk" 
            <?php if(isset($_POST['colors']) && $_POST['colors'] == 'blk'){ echo 'selected="selected"';}?>
            >Black</option>
        </select>
        <span class="error"><?php echo $colors_Err?></span>

        <span class="label">Comments</span>
        <textarea name="comments"><?php if(isset($_POST['comments'])){ echo htmlspecialchars($_POST['comments']);} ?></textarea>
        <span class="error"><?php echo $comments_Err?></span>

        <span class="label">Privacy</span>
        <ul>
            <li><input type="radio" id="agreed" name="privacy" value="agreed"
            <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agreed'){ echo 'checked="checked"';}?>
            >I agree!</li>
        </ul>
        <span class="error"><?php echo $privacy_Err?></span>

        <input type="submit" value="Submit!">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>