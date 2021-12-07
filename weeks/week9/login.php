<?php
include('server.php');
include('includes/header.php');
?>
<main>
<h1 class = "center"> Login!</h1>

<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="POST">
    <fieldset>
         <span class="label">Username</span>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])){ echo $_POST['username'];} ?>">
        
        <span class="label">Password</span>
        <input type="password" name="password">

        <button name="login_user" type="submit" class="btn">Login</button>
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
        <?php
        include('./errors.php');
        ?>
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
