<?php
include('includes/server.php');
include('includes/header.php');
?>
<main>
<h1> Register Today!</h1>

<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
         <span class="label">Username</span>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])){ echo htmlspecialchars($_POST['username']);} ?>">
        
        <span class="label">Password</span>
        <input type="text" name="password_1" value="<?php if(isset($_POST['password_1'])){ echo htmlspecialchars($_POST['password_1']);} ?>">

        <input name = "reg_user" type="submit" value="Submit!">
        <p><a href="">Reset</a></p>
        <?php echo $username_Err?>
        <?php echo $password_1_Err?>
    </fieldset>
</form>
<p><a href="/it261/weeks/week9/register.php">Not a Member? Please Register!</a></p>
</main>
</div>


<?php
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');
?>
