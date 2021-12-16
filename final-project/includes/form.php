<form class="contactForm"action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
        <span class="label">First Name</span>
        <input class="textInput"type="text" name="first_name" value="<?php if(isset($_POST['first_name'])){ echo htmlspecialchars($_POST['first_name']);} ?>">
        <span class="error"><?php echo $first_name_Err?></span>
        <span class="label">Last Name</span>
        <input class="textInput"type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){ echo htmlspecialchars($_POST['last_name']);} ?>">
        <span class="error"><?php echo $last_name_Err?></span>
        <span class="label">Email</span>
        <input class="textInput"type="text" name="email" value="<?php if(isset($_POST['email'])){ echo htmlspecialchars($_POST['email']);} ?>">
        <span class="error"><?php echo $email_Err?></span>
        <span class="label">Phone Number (Make sure to follow the format!)</span>
        <input class="textInput"type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])){ echo htmlspecialchars($_POST['phone']);} ?>">
        <span class="error"><?php echo $phone_Err?></span>

        <span class="label">How often do you want to hear from us?</span>
        <ul>
            <li><input type="radio" id="weekly" name="communication" value="weekly"
            <?php if(isset($_POST['communication']) && $_POST['communication'] == 'weekly'){ echo 'checked="checked"';}?>><label for="weekly">Weekly</label></li>
            <li><input type="radio" id="bi-weekly" name="communication" value="bi-weekly"
            <?php if(isset($_POST['communication']) && $_POST['communication'] == 'bi-weekly'){ echo 'checked="checked"';}?>><label for="bi-weekly">Bi-Weekly</label></li>
            <li><input type="radio" id="other" name="communication" value="other"
            <?php if(isset($_POST['communication']) && $_POST['communication'] == 'other'){ echo 'checked="checked"';}?>><label for="other">Other</label></li>
        </ul>
        <span class="error"><?php echo $communication_Err?></span>

        <span class="label">Favorite Perks</span>
        <ul>
            <li><input type="checkbox" id="Build_quality" name="perks[]" value="Build_quality"
            <?php if(isset($_POST['perks']) && in_array('Build_quality',$perks)){ echo 'checked="checked"';}?>><label for="Build_quality">Build quality</label></li>
            <li><input type="checkbox" id="Keycaps" name="perks[]" value="Keycaps"
            <?php if(isset($_POST['perks']) && in_array('Keycaps',$perks)){ echo 'checked="checked"';}?>><label for="Keycaps">Keycaps</label></li>
            <li><input type="checkbox" id="Programmability" name="perks[]" value="Programmability"
            <?php if(isset($_POST['perks']) && in_array('Programmability',$perks)){ echo 'checked="checked"';}?>><label for="Programmability">Programmability</label></li>
            <li><input type="checkbox" id="Removable_cable" name="perks[]" value="Removable_cable"
            <?php if(isset($_POST['perks']) && in_array('Removable_cable',$perks)){ echo 'checked="checked"';}?>><label for="Removable_cable">Removable cable</label></li>
            <li><input type="checkbox" id="Backlight" name="perks[]" value="Backlight"
            <?php if(isset($_POST['perks']) && in_array('Backlight',$perks)){ echo 'checked="checked"';}?>><label for="Backlight">Backlight</label></li>
        </ul>
        <span class="error"><?php echo $perks_Err?></span>

        <span class="label">Favorite Switch Type</span>
        <select name="switchtype">
            <option value="" 
            <?php if(isset($_POST['switchtype']) && $_POST['switchtype'] == NULL){ echo 'selected="unselected"';}?>>Select one!</option>
            <option value="Blue" 
            <?php if(isset($_POST['switchtype']) && $_POST['switchtype'] == 'Blue'){ echo 'selected="selected"';}?>
            >Blue</option>
            <option value="Green" 
            <?php if(isset($_POST['switchtype']) && $_POST['switchtype'] == 'Green'){ echo 'selected="selected"';}?>
            >Green</option>
            <option value="White" 
            <?php if(isset($_POST['switchtype']) && $_POST['switchtype'] == 'White'){ echo 'selected="selected"';}?>
            >White</option>
            <option value="Red" 
            <?php if(isset($_POST['switchtype']) && $_POST['switchtype'] == 'Red'){ echo 'selected="selected"';}?>
            >Red</option>
            <option value="Black" 
            <?php if(isset($_POST['switchtype']) && $_POST['switchtype'] == 'Black'){ echo 'selected="selected"';}?>
            >Black</option>
            <option value="Brown" 
            <?php if(isset($_POST['switchtype']) && $_POST['switchtype'] == 'Brown'){ echo 'selected="selected"';}?>
            >Brown</option>
        </select>
        <span class="error"><?php echo $switchtype_Err?></span>

        <span class="label">Comments</span>
        <textarea class="textInput" name="comments"><?php if(isset($_POST['comments'])){ echo htmlspecialchars($_POST['comments']);} ?></textarea>
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