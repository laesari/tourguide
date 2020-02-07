<!DOCTYPE html>
<html>
	<body>
		<?php
			session_start();
			include("crudBooking.php");
			//------------------------------------
			//Jika button pinjam di klik----------
			//------------------------------------
				$nama = $_SESSION['username'];
				$tanggal = $_GET['date'];
				$orang = $_GET['people'];
				$total = $_GET['total'];
				$paket = $_GET['paket'];
				tambahBooking($nama,$tanggal,$orang,$total,$paket);
				header("Location: message.php");
		?>
	</body>
</html>