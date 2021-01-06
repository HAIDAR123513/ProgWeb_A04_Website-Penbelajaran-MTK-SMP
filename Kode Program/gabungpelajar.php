<?php
    include ('koneksi.php');

    function daftar($data)
    {
        global $koneksi;
        $namapengguna = strtolower(stripslashes($data["namapengguna"]));
        $katasandi = mysqli_real_escape_string($koneksi, $data["katasandi"]);
        $konfirm = mysqli_real_escape_string($koneksi, $data["konfirm"]);
        $nomortelegram = mysqli_real_escape_string($koneksi, $data["nomortelegram"]);
        
        //buktitransfer
        $sumber = @$_FILES['buktitransfer']['tmp_name'];
        $ukuran = $_FILES['buktitransfer']['size'];
        $buktitransfer = @$_FILES['buktitransfer']['name'];

        //ekstensi file
        $ekstensivalid = ['jpg', 'jpeg','png'];
        $ekstensi = explode('.', $buktitransfer);
        $ekstensi = strtolower(end($ekstensi));
        if(!in_array($ekstensi, $ekstensivalid))
        {
            echo "<script>
                alert('Ekstensi file berupa jpg, jpeg atau png!');
                </script>";
            return false;
        }
        
        //ukuran maksimal
        if($ukuran > 1000000)
        {
            echo "<script>
                alert('Ukuran terlalu besar!');
                </script>";
            return false;
        }

        //namapengguna tidak boleh sama
        $result = mysqli_query($koneksi, "SELECT username FROM pendaftar WHERE username = '$namapengguna'");
        if (mysqli_fetch_assoc($result))
        {
            echo "<script>
                alert('Nama pengguna sudah ada! Silahkan ubah nama pengguna lain!');
                </script>";
            return false;
        }

        //kata sandi dan konfirm kata sandi harus sama
        if($katasandi !== $konfirm)
        {
            echo "<script>
                alert('Kata sandi tidak sama!');
                </script>";
            return false;
        }

        //enkripsi kata sandi
        $katasandi = password_hash($katasandi, PASSWORD_DEFAULT);

        //tambahkan ke database
        mysqli_query($koneksi, "INSERT INTO pendaftar VALUES ('', '$namapengguna', '$katasandi', '$nomortelegram' , '$buktitransfer')");


        //menyimpan di direktori imgbukti
        $pindah = move_uploaded_file($sumber, 'imgbukti/'.$buktitransfer);
        if($pindah)
        {
            echo "<script>
                alert('Berhasil daftar! Silahkan tunggu konfirmasi dari E-Math ya!');
                document.location='index.php';
                </script>";
        }
        else
        {
            echo "<script>
                alert('Gagal');
                document.location='index.php';
                </script>";
        }
    }
    
    if (isset($_POST['daftar']))
    {
        if(daftar($_POST)>0)
        {
            echo "<script>
                    document.location='index.php';
                    </script>";
        }else
        {
            echo mysqli_error($koneksi);
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
    <title>Daftar</title>
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
            <li class="nav-item">
                <a class="nav-link" href="caradaftar.php">Cara Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
            </li>
            </ul>
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
    <div class="container">
    <div class="row">
        <div class="col">
            <img src="img/undraw_my_app_grf2.svg" style="padding-top: 3" width="478" height="478">
        </div>
        <div class="col">
        <div class="card" style="font-family: Perpetua;">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <form style="font-size : 15px;" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="namapengguna">Nama Pengguna</label>
                                <input type="text" name="namapengguna" id="namapengguna" class="form-control" placeholder="Masukkan nama pengguna" autocomplete="off" style="margin-top: 10px;" required>
                            </div>
                            <div class="form-group">
                                <label for="katasandi">Kata Sandi</label>
                                <input type="password" name="katasandi" id="katasandi" class="form-control" placeholder="Masukkan kata sandi" autocomplete="off" style="margin-top: 10px;" required>
                            </div>
                            <div class="form-group">
                                <label for="konfirm">Konfirmasi Kata Sandi</label>
                                <input type="password" name="konfirm" id="konfirm" class="form-control" placeholder="Masukkan kata sandi yang sama" autocomplete="off" style="margin-top: 10px;" required>
                            </div>
                            <div class="form-group">
                                <label for="nomortelegram">Nomor Telegram</label>
                                <input type="number" name="nomortelegram" id="nomortelegram" class="form-control" placeholder="Masukkan nomor telegram anda untuk dihubungi lebih lanjut" autocomplete="off" style="margin-top: 10px;" required>
                            </div>
                            <div class="form-group">
                                <label>Bukti Transfer</label>
                                <br><input type="file" name="buktitransfer" id="buktitransfer" placeholder="Masukkan bukti transfer" autocomplete="off" style="margin-top: 10px;" required>
                            </div>
                            <button type="submit" name="daftar" class="btn btn-outline-success" style="float: right;">Daftar</button>
                            <a href="gabungpelajar.php" type="reset" class="btn btn-outline-danger mr-1" style="float: right;">Kembali</a>
                        </form>
                    </blockquote>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>