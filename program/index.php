<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px">
    <!--header-->
    <?php include "header.php"; ?>
    <!--header-->
    <div class="container-lg">
        <div class="row">
            <!--Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- End sidebar -->

            <!-- Content -->

            <?php 
                if (isset($_GET['x']) && $_GET['x'] == 'beranda'){
                    include "beranda.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'konsumen'){
                    include "konsumen.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'pesanan'){
                    include "pesanan.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'produk'){
                    include "produk.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'laporan'){
                    include "laporan.php";
                }
            ?>
            <!-- End Content -->
        </div>
        <div class="fixed-bottom text-center">
            Copyright 2024 Anak Emak
        </div>
    </div>

</body>

</html>