<?php
include_once "Cat.php";
include_once "Elang.php";

class Persia extends Cat{
    public function call(){
        echo "$this->name Miaaww $this->age tahun<br>";
    }
}

?>