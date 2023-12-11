<?php 

class Workers {
    public $name;
    public $role;
    public $description;
    public $image;
    public $country;
    public function __construct($name, $role, $description, $image, $country){
        $this->name = $name;
        $this->role = $role;
        $this->description = $description;
        $this->image = $image;
        $this->country = $country;
    }
    public function __get($att){
        return $this -> $att;
    }
}

?>