<?php
include('server.php');
include('includes/header.php');
?>
<main>
<h1 class = "center"> Register Today!</h1>

<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
        <span class="label">First Name</span>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])){ echo htmlspecialchars($_POST['first_name']);} ?>">
        
        <span class="label">Last Name</span>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){ echo htmlspecialchars($_POST['last_name']);} ?>">
        
        <span class="label">Email</span>
        <input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo htmlspecialchars($_POST['email']);} ?>">
        

        <span class="label">Username</span>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])){ echo htmlspecialchars($_POST['username']);} ?>">
        
        <span class="label">Password</span>
        <input type="text" name="password_1" value="<?php if(isset($_POST['password_1'])){ echo htmlspecialchars($_POST['password_1']);} ?>">
        
        <span class="label">Confirm Password</span>
        <input type="text" name="password_2" value="<?php if(isset($_POST['password_2'])){ echo htmlspecialchars($_POST['password_2']);} ?>">
        

        <button type="submit" name = "reg_user" class="btn">Register</button>
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
        <?php
        include('./errors.php');
        ?>
    </fieldset>
</form>
<p><a href="/it261/weeks/week9/login.php">Already a Member? Please Login!</a></p>
</main>
</div>


<?php
include('./errors.php');
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');
?>