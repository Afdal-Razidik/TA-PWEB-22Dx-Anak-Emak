<?php 
    $conn = mysqli_connect("localhost","root","","db_kantin");
    if(!$conn){
        echo "gagal";
    }else{
        echo "berhasil";
    }
?>