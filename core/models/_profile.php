<?php 



class Profile
{
    private $email;
    private $firstname;
    private $lastname;
    private $phone;
    private $results;
    private $created;
    private $api;
    public function __construct(){

        if(!isset($_SESSION['email'])){
            $logout = new Logout();
            $logout->redirectToLogin();
        }

        /**
         * @var gets user profile from database
         */
        $this->results = DB::query(
            "SELECT * from accounts where email=%s"
        ,$_SESSION["email"]);
        
        /**
         * updates each property
         */
        foreach($this->results as $user){
            $this->email = $user['email'];
            $this->lastname = $user['lastname'];
            $this->firstname = $user['firstname'];
            $this->phone = $user['phone'];
            $this->created = $user['created'];
            $this->api = md5($user['password']);
        }
    }
    public function email()
    {
        return $this->email;
    }
    public function firstname() 
    {
        return $this->firstname;
    }
    public function lastname() 
    {
        return $this->lastname;
    }
    public function api() 
    {
        return $this->api;
    } 
    public function phone() 
    {
        return $this->phone;
    }
    public function created() 
    {
        return $this->created;
    }
}



