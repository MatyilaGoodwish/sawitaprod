<?php 

class Register extends BaseAccounts implements IRegister  { 
    public function __construct() { 
        $this->firstname = $_POST['firstname'];
        $this->lastname = $_POST['lastname'];
        $this->phone = $_POST['phone'];
        $this->password1 = sha1($_POST['password1']);
        $this->password2 = sha1($_POST['password2']) ;
        $this->email = $_POST['email'];
    }
    public function isMatchingPasswords() { 
        if( $this->password1 != $this->password2  ){
            print "passwords dont match";
            return FALSE;
            die();
        }
        return TRUE;
    }
    public function register() {
        /**
         * insert user information to the database
         */
        try{
            DB::insert("accounts", [
                "email" => $this->email,
                "firstname" =>$this->firstname,
                "lastname" => $this->lastname,
                "phone" => $this->phone,
                "password" => $this->password1
            ]);
            return TRUE;          
        }catch(Exception  $e){
                header("location: password.notification.php?error=002");
                return FALSE;
        }
    }
    public function isRegistered(){
        /**
             * check if the user is registered 
             */
            if( DB::affectedRows() == 1 )
            {
                /**
                 * set user session
                 */
          
                /**
                 * send user welcome email
                 */
               
                $to = $this->email;
                $subject = "Welcome {$this->firstname} to SAWITA Casting";
                
                $message = "
                <html>
                <head>
                <title>South African Woman In Television Arts.</title>
                </head>
                <body>
                <p>South African Woman In Television Arts.</p>
                <table>
                <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                </tr>
                <tr>
                <td>{$this->firstname}</td>
                <td>{$this->lastname}</td>
                </tr>
                </table>
                <p>Store your password: {$_POST['password1']}
                <p>
                    <img src='https://sawita.co.za/casting/branding/sawita.png'>
                </p>
                <p>37 Homestead Road, Homestead office park, Sandton , 2191</p>
                <p>+27 010 824 5199</p>
                </body>
                </html>
                ";
                
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: <info@sawita.co.za>' . "\r\n";
                $headers .= 'Cc: goomatyila@gmail.com, mphopost@sawita.co.za' . "\r\n";
                
                mail($to,$subject,$message,$headers);
                
                 /**
                  * notify user that the account has been created
                  */
                 //header("location: dashboard.php");
                
                 //include "security.php";
            }
    }
}
   
if( isset($_POST['register'])){

    $captureResult = (new CaptureVerification($_POST['answer'], $_POST['capture']) )-> validate();
    
    if($captureResult){
        $register = new Register();
        if($register->isMatchingPasswords()){
            $register->register();
            if($register->isRegistered()){
                $_SESSION['email'] = $register->email;

                echo "<script>  
                (function(){
                    document.addEventListener('DOMContentLoaded', function(){
                        /*
                        *@var safeRedirect redirects the newly registered user to dashboard
                        */
                        var safeRedirect = location.replace('dashboard.php');
                    })
                }())
                </script>";

            }
        }
    
    } else{
        print "<div class='bg-danger p-4 text-center text-white'> You failed the security check please try again </div>";
    }

}


?>