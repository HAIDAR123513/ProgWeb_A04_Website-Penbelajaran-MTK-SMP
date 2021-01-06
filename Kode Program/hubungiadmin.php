<?php
include ('koneksi.php');

    if (isset($_POST['kirim']))
    {
        $simpan = mysqli_query($koneksi, "INSERT INTO pesan (username, pesan)
                                           VALUES ('$_POST[namapengguna]',
                                                    '$_POST[pesan]')
                                                  ");
        if($simpan)
        {
            echo "<script>
                alert('Pesan terkirim');
                document.location='hubungiadmin.php';
                </script>";
        }
        else
        {
            echo "<script>
                alert('Pesan tidak terkirim');
                document.location='hubungiadmin.php';
                </script>";
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ff3a2a3758.js" crossorigin="anonymous"></script>
    <title>Hubungi Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="font-family: Perpetua;">
        <a class="navbar-brand" style="font-size: 25px;"><b>E-MATH |</b></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="font-size: 21px;">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Utama<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="layanan.php">Layanan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="caradaftar.php">Cara Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
            </li>
            </ul>
        </div>
        </div>
        <div class="dropdown">
                <button class="btn btn-outline-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="loginsebagaiadmin.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Admin
                    </a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="loginsebagaipelajar.php">
                            <i class="fas fa-user-graduate fa-sm fa-fw mr-2 text-gray-400"></i>
                                Pelajar
                        </a>
                </div>
        </div>
        <a href="gabungpelajar.php" class="btn btn-outline-danger mr-3">Daftar</a>
        </div>
    </nav>
    <div class="container" style="font-family: Perpetua;">
    <div class="row">
        <div class="col">
        <div class="card" style="margin-top: 50px; font-family: Perpetua;">
                    <div class="card-header" style="font-size: 20px;">
                        Hubungi Admin
                    </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <form style="font-family: papertua; font-size : 17px;" method="post" action=" ">
                            <div class="form-group">
                                <label for="namapengguna" style="margin-top: 10px;">Nama Pengguna</label>
                                <input type="text" name="namapengguna" id="namapengguna" class="form-control" placeholder="Masukkan nama pengguna yang didaftarkan" style="margin-top: 10px;" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="textarea" style="margin-top: 10px;">Pesan</label>
                                <textarea class="form-control" name="pesan" rows="3" id="textarea" placeholder="Masukkan pesan anda" autocomplete="off"></textarea>
                            </div>
                            <a href="caradaftar.php" class="btn btn-outline-danger" style="float: right; margin-top:16px;">Batal</a>
                            <button type="submit" name="kirim" class="btn btn-outline-success mr-1" style="float: right; margin-top:16px;">Kirim</a>
                        </form>
                    </blockquote>
                </div>
            </div>
        </div>
    <div class="col">
            <img src="img/undraw_phone_call_grmk.svg" style="padding-top: 3" width="478" height="478"> 
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>