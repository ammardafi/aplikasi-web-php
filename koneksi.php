<?php

$host="localhost";
$user="root";
$password="060606";
$db="crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>