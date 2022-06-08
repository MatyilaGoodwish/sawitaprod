<?php $title =""; $description=""; include "masterpage.header.php"; ?>

<?php 

    /**
     * Interface contract for resetting passwords
     */
    interface IReset { 
        public function save();
        public function queryToken();
    }

    class Reset implements IReset { 
        public $show = FALSE;
        public $done = FALSE;
        public function __construct(){
            $this->show = FALSE;
        }

        /**
         * actually replaces the password
         */
        public function update() { 
            if( !isset($_POST['pass'])){
                //not response
                return FALSE;
            }

            if( isset($_POST['pass']) ){
                /**
                 * @var sets a new password
                 */
                $this->newPassword = $_POST['pass'];
                DB::update('accounts',["password"=> sha1($this->newPassword)],"email=%s",$this->email);
                return DB::affectedRows(); 
            }
        }
        /**
         * saves the actual token to the property
         */
        public function save(){
            if( isset($_GET['tok'])) {
                $this->token = filter_var($_GET['tok'], FILTER_SANITIZE_STRING);
                $this->email = filter_var($_GET['email'], FILTER_SANITIZE_STRING);
                $this->show = TRUE;
                return TRUE;
            }else{
                return FALSE;
            }
        }
        public function badToken() {
            print "Error with your secret reset token try resetting again";
        }
        public function queryToken() { 
            DB::query("select * from accounts where `password` =%s", $this->token);
            return DB::affectedRows();
        }
        public function completed() {
            $this->show = FALSE;
            $this->done = TRUE;
        }
    }

    $reset = new Reset();
    if(isset($_GET['tok'])){
        if($reset->save()){
            //finds the token in the database
            $reset->queryToken();
        }else{
            $reset->badToken();
        }
    }
  
    if(isset($_POST['token'])){
        //var_dump($_POST);
        if($reset->update()){
            $reset->completed();
            //print "password has been updated";
        }else{
            header("location: reset.php");
        }
    }


?>

<?php if($reset->show): ?>

<div class="container my-4">
    <div class="p-4 bg-dark text-light">
        <form action="" method="post">
            <input type="hidden" name="token" value="<?=$reset->token?>">
            <p>
                <small>New Password</small>
                <input type="password" min-length="6" name="pass" class="form-control" required>
            </p>
            <p>
                <input type="submit" class="btn btn-sm bg-black text-danger" value="Confirm Password Change"  name="update_password">
            </p>
        </form>
    </div>
</div>

<?php endif; ?>
<?php if($reset->done): ?>

<div class="container my-4">
    <div class="p-4 bg-light text-black">
       Your password has been updated <a href="login.php" class="text-success">Login with new password</a>
    </div>
</div>

<?php endif; ?>

<?php include "masterpage.footer.php"; ?>