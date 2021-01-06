<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        header("Location: loginsebagaipelajar.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modul</title>
	<link rel="stylesheet" href="modul.css">
</head>
<body>
	<div class="navbar">
		<div class="logo">
			<a>E-MATH</a>
		</div>
		<div class="navigasi">
		<ul>
			<li><a href="modul.php">Modul</a></li>
			<li><a href="kursus.php">Grup Diskusi</a></li>
			<li><a href="kritik.php">Kritik saran</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
		</div>
	</div>	
	<div class="gambar">
	<div class="foto">
		<img src="img/gbr.png" width="100" height="100">
		<h1>Aljabar</h1>
		<a href="https://drive.google.com/drive/folders/1Oy6g78_LWUVwihdGvFJH8vsm18PSxRE0?usp=sharing" class="btn1">Download Modul</a>
	</div>
	<div class="foto">
		<img src="img/gbr1.jpeg" width="100" height="100">
		<h1>Aritmatika</h1>
		<a href="https://drive.google.com/drive/folders/1cPyehuLEE-WMSlCJqCnpRS-MpPlKdKY9?usp=sharing" class="btn2">Download Modul</a>
	</div>
	<div class="foto">
		<img src="img/gbr2.png"width="100" height="100">
		<h1>Sempoa</h1>
		<a href="https://drive.google.com/drive/folders/1oLjSoo_JxQNc6Qqa3ybE_ORwjbz7ig95?usp=sharing" class="btn3">Download Modul</a>
	</div>
	<div class="foto">
		<img src="img/vektor.jpeg"width="100" height="100">
		<h1>Vektor</h1>
		<a href="https://drive.google.com/drive/folders/1alY5sNeC7Oob3T3pTyVOexNbu2cges6x?usp=sharing" class="btn4">Download Modul</a>
	</div>
	<div class="foto">
		<img src="img/bg3.jpeg"width="100" height="100">
		<h1>Bangun Datar</h1>
		<a href="https://drive.google.com/drive/folders/1RqbFuQHiRneTNdgXbgoo6v67LRPQ9rUy?usp=sharing" class="btn5">Download Modul</a>
	</div>
	<div class="foto">
		<img src="img/int.png"width="100" height="100">
		<h1>Integral</h1>
		<a href="https://drive.google.com/drive/folders/1Hhjg8Y0-YUfHqnDQNC_s8qvck9vgtnVR?usp=sharing" class="btn6">Download Modul</a>
	</div>
</body>
</html>