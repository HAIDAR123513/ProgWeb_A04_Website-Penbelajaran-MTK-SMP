<!doctype html>
<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        header("Location: loginsebagaiadmin.php");
        exit;
    }

    include ('koneksi.php');
    if(isset($_GET['hal']))
    {
            $hapus = mysqli_query($koneksi, "DELETE FROM pelajar WHERE id = '$_GET[id]'");
            if($hapus)
            {
                echo "<script>
                    alert('Hapus Data Sukses');
                    document.location='datapelajar.php';
                    </script>";
            }
    }   
?>