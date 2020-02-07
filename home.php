<?php
	session_start();
?>
<html>
	<head>
        <title>TuGu DIY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="styles/main.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/home_style.css">
		<link rel="stylesheet" type="text/css" href="css/nav_logout.css">
	</head>
    
<body>
    <div class="profile-page">
      	<div class="wrapper">
       	 	<div class="page-header page-header-small" filter-color="green">
          		<div class="page-header-image" data-parallax="true" style="background-image: url('pictures/background.png');"></div>
          		<div class="container">
            		<div class="content-center">
              			<div class="cc-profile-image">
                        	<a href="#"><img src="pictures/logo.png" alt="Image"/></a>
                        </div>
              			<div class="h2 title">Tour Guide Yogyakarta</div>
             			<p class="category text-white">Easy Get your Tour Guide</p>
						<?php
							include('nav_logout.php');
						?>
            		</div>
         		</div>
        	</div>
		</div>
	</div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  
    	<hr>
        <h4><b>One Destination Packet Tour !</b></h4>
        
        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="destination">
			<div class="w3-quarter">
				<div class="w3-card">
                    <a href="ulen_sentalu.php">
                        <img src="pictures/ulen_sentalu.png" class="image" style="width:100%">
                        <div class="w3-container">
                            <h4>Ulen Sentalu Meseum</h4>
                            <p>The museum displays relics and artifact from royal houses and kratons of Java.</p>
                        </div>
                    </a>
                </div>
			</div>
            <div class="w3-quarter">
                <div class="w3-card">
                	<a href="taman_pintar.php">
                        <img src="pictures/taman_pintar.png" class="image" style="width:100%">
                        <div class="w3-container">
                            <h4>Taman Pintar</h4>
                            <p>A tourism object for Kids and a place for Expression, Appreciation, 
                            Creation in a pleasant situation.</p>
                        </div>
                    </a>
				</div>
            </div>
            <div class="w3-quarter">
                <div class="w3-card">
                    <a href="jomblang_cave.php">
                        <img src="pictures/jomblang_cave.png" class="image" style="width:100%">
                        <div class="w3-container">
                            <h4>Jomblang Cave</h4>
                            <p>An amazing the vertical cave to see the nature phenomenon heavenly 
                            light coming in through the ho.</p>
                        </div>
                    </a>
				</div>
            </div>
            <div class="w3-quarter">
                <div class="w3-card">
                    <a href="borobudur.php">
                        <img src="pictures/borobudur.png" class="image" style="width:100%">
                        <div class="w3-container">
                            <h4>Borobudur</h4>
                            <p>9th-century Mahayana Buddhist temple in Magelang Regency, not far from the town of Muntilan.</p>
                        </div>
                    </a>
				</div>
            </div>
		</div>
        
  		<hr>
        <h4><b>Special Packet Tour !</b></h4>
        
		<!-- Second Photo Grid-->
		<div class="w3-row-padding w3-padding-16 w3-center">
			<div class="w3-quarter">
                <div class="w3-card">
                    <a href="one_destination.php">
                        <img src="pictures/candi_prambanan.png" class="image" style="width:100%">
                        <div class="w3-container">
                          	<h4>1 Day Destination Packet Tour</h4>
                            <p>Be ready to get new experience of heritage and volcano adventure in a day!
                             Borobudur sunrise, mount Merapi, and Prambanan tour.</p>
                        </div>
                    </a>
				</div>
            </div>
            <div class="w3-quarter">
                <div class="w3-card">
                    <a href="night_walking.php">
                        <img src="pictures/night_tour.png" class="image" style="width:100%">
                        <div class="w3-container">
                            <h4>Night Walking and Food Tour</h4>
                            <p>See a different side of Yogyakarta, Indonesia’s cultural capital, on this fun 
                            night tour jam-packed with street food delights.</p>
                        </div>
                    </a>
				</div>
            </div>
            <div class="w3-quarter">
                <div class="w3-card">
                    <a href="special_culinary.php">
                        <img src="pictures/culinary.png" class="image" style="width:100%">
                        <div class="w3-container">
                            <h4>Special Culinary & Private Tour</h4>
                            <p>Yogyakarta private tour is a private city tour that will takes you around Yogjakarta 
                            city for one full day. Enjoy a Scpecial City!</p>
                        </div>
                    </a>
				</div>
            </div>
            <div class="w3-quarter">
                <div class="w3-card">
                	<a href="hiking_camping.php">
                        <img src="pictures/ngalenggeran_vulcano.png" class="image" style="width:100%">
                        <div class="w3-container">
                            <h4>Hiking & Camping Ancient Vulcano</h4>
                            <p>Hike to the peak of the ancient volcanoe Ngalnggeran and 
                            enjoy the magnificent view of the southern mountains of Yogyakarta.</p>
                        </div>
                    </a>
				</div>
            </div>
		</div>
        
  		<hr id="about">

		<!-- About Section -->
		<div class="w3-container w3-padding-32 w3-center">  
        	<h3><b>About Me, TuGu DIY</b></h3><br>
        	<img src="pictures/logo.png" alt="Me" class="cc-profile-image" style="display:block;margin:auto"
             width="200px" height="200px">
        	<div class="w3-padding-32">
          		<h6><i>Easy Get your Tour Guide</i></h6>
          		<p>TuGu DiY is a web application that provides services for travelers to visit tourist attractions in the
                 area of Yogyakarta with a tour guide service. this application tourists booking tour packages that are
                  available. A traveler can provide tourguide services to help them travel in the Yogyakarta region.</p>
			</div>
      	</div>
      
		<hr>

      	<!-- Footer 
     	<footer class="w3-row-padding w3-padding-32">
        	 <div class="w3-third">
          		<h3>FOOTER</h3>
				<p>Contact me for ads : +6289627695xxx</p>
				<p>Social Media : </p>
        	</div>
      	</footer>
		-->

    <!-- End page content -->
    </div>

	<script>
		// Script to open and close sidebar
		function w3_open() {
		  document.getElementById("mySidebar").style.display = "block";
		}
     
		function w3_close() {
		  document.getElementById("mySidebar").style.display = "none";
		}
    
		// Get the modal
		var modal = document.getElementById('id01');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
    
		// Get the modal
		var modal2 = document.getElementById('id02');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal2) {
				modal2.style.display = "none";
			}
		}
    </script>
</body>
</html>
