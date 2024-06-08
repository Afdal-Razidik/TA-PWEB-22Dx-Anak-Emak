<?php 
    session_start();
    include "konek.php";

    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password']))  : "";
    if (!empty($_POST['submit_validate'])) {
        $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username' && password = '$password'");
        $hasil = mysqli_fetch_array($query);
        if ($hasil) {
            $_SESSION['username_kantin'] = $username;
            header('location:../beranda');
            
        }else{ ?>
<script>
alert('username dan password salah!!')
</script>
<?php
        }
    }
?>