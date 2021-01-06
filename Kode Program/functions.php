<?php 
		$conn = mysqli_connect("localhost", "root", "" , "admin");


function tambah ($data) {
	global $conn;

	 $kritik = htmlspecialchars($data ["kritik"]);
	 $saran = htmlspecialchars($data ["saran"]);
	 // querynya
	 $query = "INSERT INTO kritiksaran VALUES
	 			('', '$kritik', '$saran')";

	 mysqli_query($conn, $query);

	 return mysqli_affected_rows($conn);
}


 ?>