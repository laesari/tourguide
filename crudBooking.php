<!DOCTYPE html>
<html>
	<body>
		<?php
			require_once ('koneksi.php');
			//------------------------------------
			//Tambah 1 record ke tabel pinjam----
			//------------------------------------
			function tambahBooking($nama,$tanggal,$orang,$total,$paket){
				$koneksi = koneksi();
				$sql = "insert into pesan values( 0,'sari','$tanggal', $orang, $total, '$paket')";
				if (!mysqli_query($koneksi, $sql)){
					die('Error: ' . mysqli_error());
				}
				mysqli_close($koneksi);
			}
		?>
	</body>
</html>