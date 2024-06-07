<?php 
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
    $password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";
    if (!empty($_POST['submit_validate'])) {
        if ($username == "admin@admin.com" && $password == "1234") {
            header('location:../beranda');
            # code...
        }else{ ?>
<script>
alert('username dan password salah!!')
</script>
<?php
        }
    }
?>