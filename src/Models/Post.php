<?php

namespace forum\Models;

use forum\Models\TimeStampModel;

class Post extends TimeStampModel{
    public $title;    
    public $content;  
    public $user;  
    public $topics;  
    
    public function __construct($title, $content){
        parent::__construct();
        $this ->title=$title ;
        $this ->content = $content;
        $this ->topics = [];
    }

    public function setUser($user){
        $this->user = $user; 
        $this->user->addPost($this);
        return $this;
    }

    public function addTopic($topic){
        $topic->setPost($this);
        $this->topics[]= $topic;
        return $this;
    }

    

    

}


?>