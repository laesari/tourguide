<html>
	<body>
		<?php
			session_start();
			include('crudUser.php');
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(otentik($username, $password)){
				header("Location: home.php");
			}
			else {
				header("Location: index.php");
			}
		?>
	</body>
</html>