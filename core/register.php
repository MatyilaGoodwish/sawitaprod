 
<?php $title="Register"; $description="Register new account"; include "masterpage.header.php"; ?>

 
    <form method="post" >
    <div class="bg-black text-white">
    <div class="p-4">
        <h3>Register</h3>
       <p>
       <small>accounts > create</small>
       </p>
    </div>
</div>

     <div class="p-3">
     <p>
            <small>first name* </small>
            <input type="text" name="firstname" required class="form-control">
        </p>
        <p>
            <small>last name*</small>
            <input type="text" name="lastname" required id="lastname" class="form-control">
        </p>
        <p>
            <small>phone (optional)</small>
            <input type="text" required name="phone" class="form-control">
        </p>
        <p>
            <small>email address*</small>
            <input type="email" rquired name="email" id="email" class="form-control">
        </p>
        <p>
            <small>password* </small>
            <input type="password" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{6,}$" required name="password1" id="password1" class="form-control">
        </p>
        <p>
            <small>confirm password*</small>
            <input type="password" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{6,}$" required name="password2" id="password2" class="form-control">
        </p>
        <div class="p-3 bg-light">
            "Solve the challenge" see tip below:
            <p>
                (<?=$capture->start()?>) less <?=$capture->challenge?>
            </p>
            <input type="hidden" name="answer" value="<?=$capture->tip()?>">
            <input type="number" class="form-control" placeholder="tip: <?=$capture->tip()?>" required name="capture" id="capture">
        </div>
        <p>
            <input type="submit" value="Register" class="btn btn-success w-100" name="register">

            
        </p>
        <p>
            <a href="index.php" class="text-warning">Cancel</a>     |   <a href="login.php" class="text-secondary">Login to existing account</a> 
        </p>
     </div>
       
    </form>
</div>

<?php include "masterpage.footer.php";?>