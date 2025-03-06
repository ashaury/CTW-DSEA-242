<?php
include_once("Cat.php");
require_once "Persia.php";
require_once "Tikus.php";
require_once "Elang.php";

$kucing = new Cat("Gibby",3);
// $kucing->name = "Gibby";
$kucing->call();

$persia = new Persia("Dastan",2);
$persia->call();

$tikus = new Tikus();
$tikus->name = "jerry";
$tikus->eat();

$elang = new Elang();
$elang->terbang();
?>