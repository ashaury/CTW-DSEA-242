<?php
require_once "Hewan.php";

class Tikus extends Hewan{

    public function eat(){
        echo "$this->name makan Keju";
    }
}
?>