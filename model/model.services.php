<?php 
class Services {
    public $name;
    public $image;
    public $description;
    public $price;
    public $category;

    public function __construct($name, $image, $description, $price, $category){
        $this->name = $name;
        $this->image = $image;   
        $this->description = $description;  
        $this->price = $price;
        $this->category = $category;
    }
    public function __get($att){
        return $this -> $att;
    }
}
