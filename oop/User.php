<?php
class User{
// Identifier 
// access modifier<space>$nama_var
    public $username;
    private $password;
    public $nama;
// Method
// access modifier<space>function<space> namaMethod()
    public function getUsername(){
        // in java -> this.username;
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function infoUser(){
        echo "Username: ".$this->username."<br>";
        echo "Nama: ".$this->nama."<br>";
    }
}
?>