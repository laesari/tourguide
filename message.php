<?php
	session_start();
?>
<html>
	<title>TuGu DIY</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/book_style.css">
    <style>
	.buttonright {
		float: right;
	}
	</style>
	
<body class="w3-light-grey">

	<!-- Page Container -->
	<div class="w3-content w3-margin-top" style="max-width:1400px;">
		<!-- The Grid -->
		<div class="w3-row-padding w3-padding-16 w3-margin-right w3-margin-left">
				<div class="w3-container w3-card w3-white w3-margin-bottom">
					<h2 class="w3-text-grey w3-padding-16" align="center">
						<img src="pictures/logo.png" class="icon"/></img>
						&nbsp Tour Guide Yogyakarta
					</h2>
					<div class="w3-container">
						<table width="100%">
							<tr>
								<td width="25%"></td>
								<td width="50%">
									<div class="w3-container w3-card w3-white">
										<form action="prosesBooking.php" action="get">
											<div class="w3-container">
												<h4 class="w3-text-teal" align="center"><img src="pictures/images.jfif" height="100px" width="100px" /><br>
													THANKS FOR YOUR ORDER! <br><br><br>
													Wait for confirmation, <br><br>
													Enjoy your vocation :)
												
												</h4>
												<input type="button" value="CLOSE" class="button2 buttonright" onclick="goBack();"></input>
										</form>
									</div>
								</td>
								<td width="50%"></td>
							</tr>
						</table>
						<br><br><br>
						<!-- END BOOKING -->
					</div>
				</div>
			</div>
		<!-- End Grid -->
		</div>
	<!-- End Page Container -->
	</div>
	<script>
		function goBack() {
			window.history.back();
			window.history.back();
			window.history.back();
		}
	</script>
</body>
</html>
