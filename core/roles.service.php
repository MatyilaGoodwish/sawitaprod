<?php

/**
 * membership roles service
 */
class MembershipRoles 
{
    public $email;
    public function __construct($email)
    {
        $this->email = $email;
    }
    public function update(string $role)
    {
        $this->role = $role;
        try{
            DB::query("update accounts set membership=%s where email=%s", $this->role, $this->email);
        }catch(Exception $e){
            echo "failed to update";
        }
    }
    public function get_role()
    {
        try{
            return DB::query("select membership from accounts where email = %s", $this->email);
            
        }catch(Exception $e){
            print "<input type='text' readonly value='Not updated' class='form-control'>";
        }
    }
}

