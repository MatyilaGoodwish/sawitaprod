<?php 
    
    require_once("core/config/db.class.php");
    require_once("core/config/credentials.php");
 
    class Talent
    {
        public function __construct()
        {
            
        }
        public function get_talent() { 
            try{
                return DB::query("select * from accounts");
            }catch(Exception $e){
                //echo "I could not get the talent";
            }
         
        }
        public function total() { 
            try{
                return DB::query("select count(id) as Total from accounts");
            }catch(Exception $e){
                //echo "I could not get the talent";
            }
         
        }
        public function pending() { 
            try{
                return DB::query("select count(id) as Pending from accounts where approved = 'pending'");
            }catch(Exception $e){
                //echo "I could not get the talent";
            }
         
        }

        //Processing
        public function Processing() { 
            try{
                return DB::query("select count(id) as Processing from accounts where approved = 'processing'");
            }catch(Exception $e){
                //echo "I could not get the talent";
            }
         
        }
         //Processing
         public function Approved() { 
            try{
                return DB::query("select count(id) as Done from accounts where approved = 'approved'");
            }catch(Exception $e){
                //echo "I could not get the talent";
            }
         
        }
    }

?>