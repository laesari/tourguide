<?php
	session_start();
?>
<html>
	<title>TuGu DIY</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/des_style.css">
    
<body class="w3-light-grey">

	<!-- Page Container -->
	<div class="w3-content w3-margin-top" style="max-width:1400px;">
		<!-- The Grid -->
		<div class="w3-row-padding">
            <!-- Left Column -->
            <div class="w3-third">
      			<div class="w3-white w3-text-grey w3-card-4">
        			<div class="w3-display-container">
          				<img src="pictures/night_tour.png" style="width:100%" alt="Avatar"/></img>
        			</div>
        			<div class="w3-container">
						<hr>
						<br>
						<div class="w3-light-grey w3-round-xlarge">
							<img src="pictures/destination/night_walking.png" style="width:100%" style="height:197px"/></img>
						</div>
						<br>
					</div>
				</div>
				<br>
			<!-- End Left Column -->
			</div>

			<!-- Right Column -->
			<div class="w3-twothird">
				<div class="w3-container w3-card w3-white w3-margin-bottom">
					<h2 class="w3-text-grey w3-padding-16">
						<img src="pictures/logo.png" class="icon"/></img>
						&nbsp Night Walking and Food Tour
					</h2>
					<div class="w3-container">
					
					<!-- BOOKING -->
					<div class="w3-container w3-card w3-white">
						<form action="booking.php" method="get">
							<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Booking</h2>
							<div class="w3-container">
								<h6 class="w3-text-teal"><img src="pictures/location.jfif" height="20px" width="20px"/>
									&nbsp &nbsp
									<input value="Night Walking" name="paket" size="19"></input>
								</h6>
								<h6 class="w3-text-teal">
									<i class="fa fa-calendar fa-fw w3-margin-right"></i>
									<input type="date" name="date">&nbsp &nbsp &nbsp
									<img src="pictures/avatar.png" height="20px" width="20px"/>
										&nbsp &nbsp
										<input type="button" class="button2" value="-" onclick="decrement();"></input>
										<input type="text" id="inc"  value="1" size="2" name="people"></input>
										<input type="button" class="button2" value="+" onclick="increment();"></input>
										&nbsp People
								</h6>
					
								<hr>
							</div>
							<div class="w3-container">
								<h5 class="w3-opacity"><b>Total</b></h5>
								<h6 class="w3-text-teal"><img src="pictures/rupiah.png" height="20px" width="20px"/>&nbsp &nbsp &nbsp
									<input type="text" placeholder="Total" id="total" name="total" value="548000" size="19" />
								</h6>
								<hr>
							</div>
							<div class="w3-container">
								<h5 class="w3-opacity"><b>Booking</b></h5>
								<input type="submit" value="BOOKING" class="button"></input><br><br>
							</div>
						</form>
					</div>
					<hr>
					<!-- END BOOKING -->
				
					<!-- SLIDESHOW-->  
					<div class="w3-container">
						<div class="w3-content" style="max-width:800px">
							<img class="mySlides" src="fix/malio 1.png" style="width:100%">
							<img class="mySlides" src="fix/malio 2.png" style="width:100%">
							<img class="mySlides" src="fix/night4.png"style="width:100%">
							<img class="mySlides" src="fix/night1.png"style="width:100%">
							<img class="mySlides" src="fix/night2.png"style="width:100%">
							<img class="mySlides" src="fix/night3.png"style="width:100%">
						</div>
						<div class="w3-center">
							<div class="w3-section">
								<button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
								<button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
							</div>
							<button class="w3-button demo" onclick="currentDiv(1)">1</button> 
							<button class="w3-button demo" onclick="currentDiv(2)">2</button> 
							<button class="w3-button demo" onclick="currentDiv(3)">3</button> 
							<button class="w3-button demo" onclick="currentDiv(4)">4</button>
							<button class="w3-button demo" onclick="currentDiv(5)">5</button>
							<button class="w3-button demo" onclick="currentDiv(6)">6</button>
						</div>
						<hr>
					</div>
					<!-- SLIDESHOW END-->
				</div>
			<!-- End Right Column -->
			</div>
		<!-- End Grid -->
		</div>
	<!-- End Page Container -->
	</div>


	<!-- SLIDESHOW-->  
	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function currentDiv(n) {
			showDivs(slideIndex = n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			if (n > x.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" w3-red", "");
			}
			x[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " w3-red";
		}
		//INCREMENT BUTTON
		var orang = 1;
		var total = 548000;
		function increment() {
			orang++;
			total = total + 548000;
			document.getElementById('inc').value = orang;
			document.getElementById('total').value = total;
		}
		function decrement() {
			if (orang>=2){
				orang--;
				total = total - 548000;
				document.getElementById('inc').value = orang;
				document.getElementById('total').value = total;
			}
		}
	</script>
</body>
</html>
