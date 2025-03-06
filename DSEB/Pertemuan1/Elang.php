<?php
require_once "HewanBersayap.php";

class Elang implements HewanBersayap,HewanBerkaki{

    public function terbang(){
        echo "Elang mengepakan Sayapnya";
    }
}
?>