<?php 
 class Users {
    protected $username;
    protected $mail;
    protected $pass;
    protected $description;

    public function __construct($username,$mail,$pass,$description){
       $this->username = $username;
       $this->mail = $mail;
       $this->pass = $pass;
       $this->description = $description;
    }
    
    public function __get($att){
        return $this->$att;
    }
        

 }
?>