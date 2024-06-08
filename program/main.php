<?php 
    session_start();
    if(empty($_SESSION['username_kantin'])){
        header('location:login');
    }
?>
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
               include $page;
            ?>
            <!-- End Content -->
        </div>
        <div class="fixed-bottom text-center">
            Copyright 2024 Anak Emak
        </div>
    </div>

</body>

</html>