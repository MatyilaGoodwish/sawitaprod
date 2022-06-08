<?php session_start();?>
<?php $title="Login"; $description="Login to your account"; include "masterpage.header.php";?>



    <form method="POST">

        <div class="bg-dark text-light">

          <div class="p-4">

          <h3>Login</h3>

           <p>

           <small>accounts > existing </small>

           </p>

          </div>

        </div>

        

        <div class="p-3">

            <small>email address*</small>

            <input type="email" name="email" id="email" required class="form-control">

        </div>

        <div class="p-3">

            <small>password*</small>

            <input type="password" name="password"

                

                title="Password must contain 8 or more characters, mixed letters and numbers"

            id="user-password" required class="form-control">

        </div>

        <div class="p-3 bg-light">

            "Solve the challenge" see tip below:

            <p>

                (<?=$capture->start()?>) less <?=$capture->challenge?>

            </p>

            <input type="hidden" name="answer" value="<?=$capture->tip()?>">

            <input type="number" class="form-control" placeholder="tip: <?=$capture->tip()?>" required name="capture" id="capture">

        </div>

        <div class="text-right align-right p-3">

            <input type="submit" value="Login" name="sign" class="btn btn-success w-100">

            <p></p>

            <p>  <a href="index.php" class="text-warning">Back to main</a> | 

            <a href="register.php" class="text-secondary">create new account</a> | <a href="forgot.password.php" class="text-secondary">forgot password</a>

            </p>

       </div>

    </form>

 

 <?php include "masterpage.footer.php";?>