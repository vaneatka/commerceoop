<?php

namespace forum\Models;

use forum\Models\TimeStampModel;

class Topic extends TimeStampModel{
    public $title;  
    public $posts;

    public function __construct($title){
        parent::__construct();
        $this->title = $title;
        $this->posts = [];
    }

public function setPost($post){
    $this->posts[]= $post;
}

}

?>