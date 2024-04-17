<?php
include("Mahasiswa.php");
include("ViewMahasiswa.php");


$mahasiswa = new Mahasiswa("2205002", "aliazmi a-nya tiga");


$view = new ViewMahasiswa();

$view->showMahasiswa($mahasiswa);
?>
