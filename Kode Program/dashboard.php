<?php
    session_start();
        if(!isset($_SESSION["login"]))
        {
            header("Location: loginsebagaiadmin.php");
            exit;
        }
    
    include('koneksi.php');

    //jumlah data di pesan
        $data1 = mysqli_query($koneksi, "SELECT*FROM pesan");
        $jumlah_data1 = mysqli_num_rows($data1);

    //jumlah data di pendaftar
        $data2 = mysqli_query($koneksi, "SELECT*FROM pendaftar");
        $jumlah_data2 = mysqli_num_rows($data2);

    //jumlah data di pelajar
        $data3 = mysqli_query($koneksi, "SELECT*FROM pelajar");
        $jumlah_data3 = mysqli_num_rows($data3);

    //jumlah data di modul
        $data4 = mysqli_query($koneksi, "SELECT*FROM modul");
        $jumlah_data4 = mysqli_num_rows($data4);

    //jumlah data di kritiksaran
        $data5 = mysqli_query($koneksi, "SELECT*FROM kritiksaran");
        $jumlah_data5 = mysqli_num_rows($data5);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dashboard-admin.css">
    <script src="https://kit.fontawesome.com/ff3a2a3758.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
      <a class="navbar-brand text-white p-2"><b>ADMINISTRATOR</b></a>
        <form class="form-inline my-2 my-lg-0 mr-1 ml-auto text-white" action="" method="post">
            <a href="keluar.php" class="nav-link text-white"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Keluar</a>
        </form>
    </nav>
        <div class="row no-gutters mt-5">
            <div class="col-md-2 bg-secondary mt-2 pr-3 pt-4" style="height:553px;">
                <ul class="nav flex-column ml-3 mb-4">
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
          <h2>
              Dashboard
          </h2>
          <hr class = bg-secondary>
          <div class="row">

          <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-danger text-uppercase mb-3">Profil Admin
                                       </div>
                                        <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 text-gray-800">
                                                    <p>
                                                        Tentang admin
                                                    <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                    <i class="fas fa-user fa-sm fa-fw fa-2x text-gray-300"></i>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

            <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">Pesan Masuk
                                       </div>
                                        <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 text-gray-800">
                                                    <p>
                                                        <?php
                                                            echo $jumlah_data1; 
                                                        ?>
                                                        data
                                                    <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                    <i class="far fa-envelope fa-2x text-gray-300"></i>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

            <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-success text-uppercase mb-3"> Data Pendaftar
                                       </div>
                                        <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 text-gray-800">
                                                    <p>
                                                        <?php
                                                            echo $jumlah_data2; 
                                                        ?>
                                                        data
                                                    <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                    <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

            <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-info text-uppercase mb-3">Data Pelajar
                                       </div>
                                        <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 text-gray-800">
                                                    <p>
                                                        <?php
                                                            echo $jumlah_data3; 
                                                        ?>
                                                        data
                                                    <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

            <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-dark text-uppercase mb-3">Data Modul
                                       </div>
                                        <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 text-gray-800">
                                                        <p>
                                                        <?php
                                                            echo $jumlah_data4;
                                                        ?>
                                                        data
                                                        <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                    <i class="fas fa-book-reader fa-2x text-gray-300"></i>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-warning text-uppercase mb-3">Kritik Saran
                                       </div>
                                        <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 text-gray-800">
                                                    <p>
                                                        <?php
                                                            echo $jumlah_data5; 
                                                        ?>
                                                        data
                                                    <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                    <i class="far fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                         </div>
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