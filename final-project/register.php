<?php
include('server.php');
include('includes/header-form.php');
?>
<div id="wrapper">
<h1> Register Today!</h1>


<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
        <span class="label">First Name</span>
        <input class="textInput" type="text" name="first_name" value="<?php if(isset($_POST['first_name'])){ echo htmlspecialchars($_POST['first_name']);} ?>">
        
        <span class="label">Last Name</span>
        <input class="textInput" type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){ echo htmlspecialchars($_POST['last_name']);} ?>">
        
        <span class="label">Email</span>
        <input class="textInput" type="email" name="email" value="<?php if(isset($_POST['email'])){ echo htmlspecialchars($_POST['email']);} ?>">
        

        <span class="label">Username</span>
        <input class="textInput" type="text" name="username" value="<?php if(isset($_POST['username'])){ echo htmlspecialchars($_POST['username']);} ?>">
        
        <span class="label">Password</span>
        <input class="textInput" type="password" name="password_1" value="<?php if(isset($_POST['password_1'])){ echo htmlspecialchars($_POST['password_1']);} ?>">
        
        <span class="label">Confirm Password</span>
        <input class="textInput" type="password" name="password_2" value="<?php if(isset($_POST['password_2'])){ echo htmlspecialchars($_POST['password_2']);} ?>">
        

        <button type="submit" name = "reg_user" class="btn">Register</button>
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
        <?php
        include('./errors.php');
        ?>
    </fieldset>
</form>
<h3>Already a Member?</h3>
<span class="block"><a href="login.php">Login here!</a></span>
</div>
</body>
</html>