<?php 
    $server="localhost"; 
    $user="root"; 
    $password=""; 
    $database="si_peminjamanaula"; 
    
    //koneksi database
    $koneksi=mysqli_connect($server, $user, $password, $database);
    if(!$koneksi){
        die("Connection falied :" . mysqli_connect_error());
    }
?>