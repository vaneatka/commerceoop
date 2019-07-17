<?php
// aici punem logica legata de timp, ce se transmite mostenitorilor
namespace forum\Models;

class TimeStampModel{
    public $created;
    public $modified;
    public $viewed;

    public function __construct(){
        $this->created = time();
        $this->modified = 0;
        $this->viewed = 0;
        
    }
}


?>