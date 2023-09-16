<?php
require 'db.php';
$hapus= hapusDataArtikel($_GET['id_artikel']);
if($hapus){
    header("location:data_artikel.php");
}