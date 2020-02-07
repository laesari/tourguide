<!DOCTYPE html>
<html>
	<body>
		<?php
			include('koneksi.php');
			function cariUserDariUsername($username){
				$koneksi = koneksi();
				$sql = "select * from user where username='$username'";
				$hasil = mysqli_query($koneksi, $sql);
				if(mysqli_num_rows($hasil)>0){
					$baris=mysqli_fetch_assoc($hasil);
					$data['username']=$baris['username'];
					$data['password'] = $baris['password'];
					mysqli_close($koneksi);
					return $data;
				}else{
					mysqli_close($koneksi);
					return null;
				} 
			} 
			// memeriksa otentikasi user berdasar username dan password
			function otentik($username, $password){
				$data = array();
				$pwdmd5 = $password;						//$pwdmd5 = hash($password);
				$dataUser = cariUserDariUsername($username);
				if($dataUser != null){
					if($pwdmd5==$dataUser['password']){
						return true;
					}else{ return false; }
				}else{
					return false;
				} 
			} 
			function tambahUser($username,$jenis,$telp,$password){
				$koneksi = koneksi();
				$sql = "insert into user values('$username','$jenis','$telp','$password')"; //md5('$password')
				$hasil = 0;
				if(mysqli_query($koneksi, $sql))
					$hasil = 1;
				mysqli_close($koneksi);
				return $hasil;
			} 
		?>
	</body>
</html>