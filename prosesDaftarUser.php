<html>
	<body>
		<?php
			include('crudUser.php');
			$username = $_POST['uname'];
			$jenis = $_POST['jenis'];
			$telp = $_POST['tlp'];
			$password = $_POST['psw'];
			$hasil = tambahUser($username, $jenis, $telp, $password);
			if($hasil>0)
				header("Location: index.php");
		?>
	</body>
</html>