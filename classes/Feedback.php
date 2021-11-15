<?php
//
//
class send_message extends Db_connect{
    //
    //
    public $user_name;
    public $user_email;
    public $message;
    
    function __construct() {
        $this->user_name = $_REQUEST['user_name'];
        $this->user_email = $_REQUEST['user_email'];
        $this->message = $_REQUEST['message'];        
    }
    
    public function insert_message(){
        //
        //Query.
        $sql = "insert into feedback (name,email,subject,message) values ('Kaniu','kaniu@gmail.com','adding a new word','hello, I want to add a new word.
                How do I do so?')";
        //
        //
        $stmt = $this->connect()->query($sql);
    }
}