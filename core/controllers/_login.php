 <?php


class Login {
    public function __construct() {
        
    }
    public function signIn() { 
         /**
         * @var user email
         */
        $this->email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $this->cleanedPassword = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        /**
         * @var password is the SHA1 encrypted password 
         */
        $this->password = sha1($this->cleanedPassword);
   
        /**
         * @var checks the user in the accounts 
         */
        DB::query("select * from accounts where email= %s and password = %s", $this->email, $this->password);

        /**
         * validates user existence
         */
        if(DB::affectedRows() == 1){
            //print "user account identified";
            /**
             * @stores the user session
             */
            $_SESSION["email"] = $this->email;
            //$url = implode("",["location:", "gateway.php?begin={$this->email}"];
            echo " <script> location.replace('dashboard.php'); </script>";
            //header();
             
        }else{
            header("location: password.notification.php?error=001");
        }
    }    
}

$login = new Login();

if(isset($_POST['sign'])){

    (new CaptureVerification($_POST['answer'], $_POST['capture']) )-> validate() ? $login->signIn() 
        : print "<div class='bg-danger p-4 text-center text-white'> You failed the security check please try again </div>";

   
}
 
