<?php 
include "config/db.class.php";
include "config/credentials.php"; 

/*
    create table students(
        id int primary key auto_increment, 
        name varchar(50),
        age int(4) default 0,
        enrolled timestamp
    )
*/
class StudentModel { 
    public $data;
    public function save ($name, $age): bool { 
        $this->data = array(
            "name" =>$name,
            "age"=>$age
        );
        DB::insert('students', $this->data);
        return DB::affectedRows();
    }
}

class Student  {
   public function __construct() {
       
   }
   public function model() { 
       return new StudentModel;
   }
}

if( (new Student())->model()->save("sifiso", 35) ) { 
    print "saved";
}else{
    print "not saved";
}


 



