<?php
	session_start();
	if(!isset($_SESSION["login"]))
	{
		header("Location: loginsebagaipelajar.php");
		exit;
	}
	
	require 'functions.php';
	if (isset($_POST["submit"])){
	if(tambah($_POST) > 0) {
		echo "
			<script>
			alert('kritik dan saran berhasil dikirimkan');
			</script>
		";

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kritik dan Saran</title>
	<link rel="stylesheet" type="text/css" href="kritik.css">
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
			<li><a href="kritik.php">Kritik Saran</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
		</div>
		</div>
		<div class="main">
			
			<h1><label for="kritik">	Kritik </label> <span><br><br></span><label for="saran">	Saran </label></h1>

			<form action="" method="post">
				<textarea placeholder="kritik" id="kritik"
				name="kritik" required></textarea>
				<br>
				<textarea placeholder="saran" id="saran" name="saran" required></textarea>
				<br>
			<button type="submit" name="submit" >Kirim</button>
			</form>
			<br>
		
		</div>
	
</body>
</html>