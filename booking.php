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
									<!-- BOOKING -->
									<div class="w3-container w3-card w3-white">
										<form action="prosesBooking.php" action="get">
											<h2 class="w3-text-grey w3-padding-16" align="center">Confirmation</h2>
											<div class="w3-container">
												<h6 class="w3-text-teal"><img src="pictures/location.jfif" height="20px" width="20px" />
													&nbsp &nbsp
													<input value="<?php echo $_GET['paket'];?>" name="paket" size="19">
												</h6>
												<h6 class="w3-text-teal">
													<i class="fa fa-calendar fa-fw w3-margin-right"></i>
													<input type="date" name="date" value="<?php echo $_GET['date']; ?>">
													&nbsp &nbsp &nbsp
												</h6>
												<h6 class="w3-text-teal">
													<img src="pictures/avatar.png" height="20px" width="20px" />
														&nbsp &nbsp
														<input type="text" value="<?php echo $_GET['people']; ?> " size="2" name="people">
														&nbsp People
												</h6>
											</div>
											<div class="w3-container">
												<h5 class="w3-opacity"><b>Total</b></h5>
												<h6 class="w3-text-teal">
													Rp. &nbsp <input type="text" name="total" value="<?php echo $_GET['total']; ?>" size="19" />
												</h6>
											</div>
											<div class="w3-container" align="center">
												<input type="button" value="CANCEL" class="button2" onclick="goBack();"></input>
												<input type="submit" value="CONFIRM" id="btnBook" class="button"></input><br><br>
											</div>
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
		}
	</script>
</body>
</html>
