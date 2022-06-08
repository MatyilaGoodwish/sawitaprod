<?php 


class Logout extends BaseAccounts {
    public function __construct() { 
        $this->loginPage = "index.php";
    }
    public function signOut() {
         /**
         * remove sessions
         */
            session_unset();
            return TRUE;
    }
    public function redirectToLogin() {
       // header("location: $this->loginPage"); 
         echo "<script> location.replace('index.php'); </script>";
       
    }
}

if( isset($_POST['signout'])){
    $logout = new Logout();
    if($logout->signOut()) {
        $logout->redirectToLogin();
    }
    
}





