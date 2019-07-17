<?php

namespace forum\Models;

use forum\Models\TimeStampModel;

class User extends TimeStampModel{
    public $full_name;
    public $user_name;
    private $password;
    public $email;
    public $posts;
    
    public function __construct($full_name,$user_name,$password,$email){
        parent::__construct();
        $this-> full_name =$full_name;
        $this-> user_name =$user_name;
        $this-> password = $this->secure_password($password);
        $this-> email =$email;    
        $this->posts = [];    
    }
    
    public function secure_password($password){
        return hash('ripemd320',$password);
    }

    public function addPost($post){
        $this->posts[] = $post;   
    }

}


?>