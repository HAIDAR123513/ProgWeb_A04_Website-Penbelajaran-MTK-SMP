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
	<title>Grup Diskusi</title>
	<link rel="stylesheet" href="kursus.css">

</head>
<body>
			<?php
				 echo "<script>
				 alert('Anda akan bergabung di grup Telegram');
				 document.location='https://t.me/joinchat/HY2xl2Ut3qH1UqSF';
				 </script>";
			?>
</body>
</html>
	