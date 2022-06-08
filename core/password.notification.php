<?php   $title="Password reset notification"; $description="Password reset token has been sent to your account"; include "masterpage.header.php";?>

<form action="">
 

<?php 
    /**
     * 
     * 
     * 001 - User not in the system
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     */

?>
<?php if(isset($_GET['error']) && $_GET['error'] == 001 ): ?>
<div class="container my-4">
    
    <div class="bg-light border shadow  p-4 text-black">
    <p> 
        Kindly check your credentials  <a href="index.php" class="text-success">continue</a>
    </p>
    </div>
   
</div>
<?php endif; ?>

<?php if(isset($_GET['error']) && $_GET['error'] == 002 ): ?>
<div class="container my-4">
    
    <div class="bg-light border shadow p-4 text-black">
    <p> 
        Try registering at a later stage or use a different email address <a href="index.php"  class="text-success">continue</a>
    </p>
    </div>
   
</div>
<?php endif; ?>

<?php if(isset($_GET['message']) && $_GET['message'] == 001 ): ?>
<div class="container my-4">
    
    <div class="bg-light border shadow  p-4 text-black">
    <p> 
        If your account exists your password will be sent via email with your reset link.  <a href="index.php"  class="text-success">continue</a>
    </p>
    </div>
   
</div>
<?php endif; ?>

</form>

<?php include "masterpage.footer.php"; ?>