<?php 
    $title = "Forgot password";
    $description = "Reset your password";
    include "masterpage.header.php";
?>

<form  method="post">
<div class="bg-dark text-white">
    <div class="p-4">
        <h3>Forgot password</h3>
        <p>
            <small>accounts > reset</small>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12 p-4">
    <p><small>email address*</small>
            <input type="email" required name="reset_email" id="reset-email" class="form-control">
        </p>
        <p>
            <input type="submit" value="Reset" class="btn btn-danger w-100">
        </p>
        <p>
            <a href="login.php" class="text-secondary">Back to main</a>
        </p>
    </div>
</div>
</form>

<?php include "masterpage.footer.php";?>