<!doctype html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        header("Location: loginsebagaiadmin.php");
        exit;
    }
    include ('koneksi.php');
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dashboard-admin.css">
    <script src="https://kit.fontawesome.com/ff3a2a3758.js" crossorigin="anonymous"></script>
    <title>Data Pendaftar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
      <a class="navbar-brand text-white p-2"><b>ADMINISTRATOR</b></a>
        <form class="form-inline my-2 my-lg-0 mr-2 ml-auto text-white" action="" method="post">
            <a href="keluar.php" class="nav-link text-white"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Keluar</a>
        </form>
    </nav>
            <div class="row no-gutters mt-5">
            <div class="col-md-2 bg-secondary mt-2 pr-3 pt-4" style="height:553px;">
                <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class = bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="profileadmin.php"><i class="fas fa-user fa-sm fa-fw mr-2"></i>Profil Admin</a><hr class = bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="pesanmasuk.php"><i class="far fa-envelope mr-2"></i>Pesan Masuk</a><hr class = bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="datapendaftar.php"><i class="fas fa-user-clock mr-2"></i>Data Pendaftar</a><hr class = bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="datapelajar.php"><i class="fas fa-user-graduate mr-2"></i>Data Pelajar</a><hr class = bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="datamodul.php"><i class="fas fa-book-reader mr-2"></i>Data Modul</a><hr class = bg-secondary>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="kritiksaran-admin.php"><i class="far fa-comments mr-2"></i>Kritik dan Saran</a>
                </li>
                </ul>
            </div>
            <div class="col-md-10 p-5">
                <div style ="width : auto; heigth : auto;">
                <div style ="width : 100%"><h2>Data Pendaftar</h2></div>
                <div style ="width : 100%; overflow : hidden;"><a href="https://web.telegram.org/"class="btn btn-success" style ="float : right">Konfirmasi via Telegram</a></div>
                </div>
                <hr class = bg-secondary>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="600px" cellspacing="0">
                        <thead>
                            <tr> 
                                <th>Nama Pengguna</th>
                                <th>Kata Sandi</th>
                                <th>Nomor Telegram</th>
                                <th>Bukti Transfer</th>                            
                                <th>Aksi</th>
                            </tr>
                        </thead>
                            <?php
                                $batas = 2;
                                $halaman = isset($_GET['hal'])?(int)$_GET['hal'] : 1;
                                $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

                                $previous = $halaman - 1;
                                $next = $halaman + 1;

                                $data = mysqli_query($koneksi,"select * from pendaftar");
                                $jumlah_data = mysqli_num_rows($data);
                                $total_halaman = ceil($jumlah_data / $batas);

                                $pendaftar = mysqli_query($koneksi,"select * from pendaftar order by id desc limit $halaman_awal, $batas");
                               

                                while ($data = mysqli_fetch_array($pendaftar))
                                { ?>
                                <tr>
                                    <td><?php echo $data['username'];?></td>
                                    <td><?php echo $data['password'];?></td>
                                    <td><?php echo $data['nomortelegram'];?></td>
                                    <td><img src="imgbukti/<?php echo $data['buktitransfer']; ?>" width="50px"/></td>
                                    <td> 
                                        <a href="hapusdatapendaftar.php?hal=hapus&id=<?=$data['id']?>" onclick="return confirm('Hapus data?')" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Data" name="tombol_hapus"><i class="far fa-trash-alt"></i></a></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                        
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end p-3">
                                <li class="page-item">
                                    <a class="page-link" <?php if($halaman > 1){ echo "href='?hal=$previous'"; } ?>>Previous</a>
                                </li>
                                <?php 
                                for($x=1;$x<=$total_halaman;$x++){
                                    ?> 
                                    <li class="page-item"><a class="page-link" href="?hal=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                    <?php
                                }
                                ?>				
                                <li class="page-item">
                                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?hal=$next'"; } ?>>Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dashboard-admin.js"></script>
</body>
</html>