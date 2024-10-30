<?php

$host="sql112.infinityfree.com";
$user="if0_37293949";
$password="kjMznWmPF3";
$db ="if0_37293949_crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>