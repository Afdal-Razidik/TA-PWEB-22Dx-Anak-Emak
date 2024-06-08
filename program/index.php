<?php 
                if (isset($_GET['x']) && $_GET['x'] == 'beranda'){
                    $page = "beranda.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'konsumen'){
                    $page = "konsumen.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'pesanan'){
                    $page = "pesanan.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'produk'){
                    $page = "produk.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'laporan'){
                    $page = "laporan.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'login'){
                    include "login.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'logout'){
                    include "./proccess/proses_logout.php";
                }else{
                    $page = "beranda.php";
                    include "main.php";
                }
?>