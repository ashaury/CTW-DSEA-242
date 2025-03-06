<?php

class Cat{
    public  $name;
    public $age;
    public $image;
    public $desk;

    //constructor
    public function __construct($nama,$age){
        // this.nama
        $this->name = $nama;
        $this->age = $age;
    }
    public function call(){
        echo "$this->name Hawiwaaw $this->age tahun<br>";
    }
    

    /**
     * Get the value of desk
     */ 
    public function getDesk()
    {
        return $this->desk;
    }

    /**
     * Set the value of desk
     *
     * @return  self
     */ 
    public function setDesk($desk)
    {
        $this->desk = $desk;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}


?>