<?php 
 
class Passwords 
{
    public function __construct() {
        $this->email = $_POST['reset_email'];
    }
    public function belongsToAnyUser() { 
        /** 
         * query the user email in the database
         */
        DB::query("select * from accounts where email =%s",$this->email);
        return DB::affectedRows();
    }
    public function startResetProcess() { 
        $results = DB::query("SELECT email, `password` from accounts where email =%s limit 1 ", $this->email);
        foreach($results as $row) { 
            $url = implode("",[
                "reset.php?tok=",
                $row['password'],
                "&email=",
                $row['email']
            ]);


            header("location: password.notification.php?message=001");
            //send email to user with url
        }
        
    }
    public function noUserByThatEmail() {
        header("location: password.notification.php?message=001");
    }
}


if(isset($_POST['reset_email'])) { 
    /**
     * @var passwords instance of Password
     */
    $passwords = new Passwords();

    //check if the password belongs to any user
    if($passwords->belongsToAnyUser()){

        //start reset process
        $passwords->startResetProcess();

    }else{
        $passwords->noUserByThatEmail();
    }
}

   

  