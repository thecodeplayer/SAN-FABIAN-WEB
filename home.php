<!DOCTYPE html>
<html>
<head>
	<title>SAN FABIAN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/applogo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div class="container">
		<div class="navbar">
			<img src="images/applogo1.png" class="logo">
			<nav>
				<ul>
					<li><a href="#home">HOME</a></li>
					<li>
						<div class="dropdown">
					    <button class="dropbtn">CATEGORIES 
					      <i class="fa fa-caret-down"></i>
					    </button>
					    <div class="dropdown-content">
					      <a href="tspots.php">Tourist Spots</a>
					      <a href="persona.php">Personalities</a>
					      <a href="festiv.php">Festivals</a>
					    </div>
					  </div> 
					</li>
					<li><a href="#map">MAP</a></li>
					<li><a href="#history">HISTORY</a></li>
					<li><a href="#prod">DELICACIES/PRODUCTS</a></li>
					<li><a href="#about">ABOUT</a></li>
				</ul>
			</nav>
		</div>

		<section id="home">
			<div class="content">
				<a href="" class="btn">DOWNLOAD APP</a>
				<h1>Not all those who <br> wonders are lost</h1>
				<p>San Fabian, Pangasinan is Philippines's best kept secret. <br> To access the full features download the app now!</p>

				
			</div>
		</section>
		<section id="map">
			<div class="maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122633.12376821971!2d120.35738579436568!3d16.154240550375775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33916ed0616a4c8d%3A0x3374058566e07825!2sSan%20Fabian%2C%20Pangasinan!5e0!3m2!1sen!2sph!4v1603276128210!5m2!1sen!2sph" width="1000" height="500" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

			</div>
		</section>
		<?php  
			$mysqli = new mysqli('localhost', 'root', '', 'webdb') or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM history") or die($mysqli->error);
			//pre_r($result);
		?>

		<section id="history">
			<div class="content">
				<h2>A Brief History of San Fabian</h2>
				<div class="img-slider"></div>
				<div class="historydesc"> 
				<?php while ($row = $result->fetch_assoc()):?>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['hisSummary'];?></p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['hisSumOne'];?></p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['hisSumTwo'];?></p>
				<?php endwhile; ?>
				</div>
			</div>
		</section>
		<section id="prod">
			<div class="prod">
				<div class="prodcontainer">
					
					<?php  
						$mysqli = new mysqli('localhost', 'root', '', 'webDB') or die(mysqli_error($mysqli));
						$result = $mysqli->query("SELECT * FROM product") or die($mysqli->error);
						//pre_r($result);
					?>
					<?php while ($row = $result->fetch_assoc()):?>
					<div class="card">
						<div class="imgbx">
							<?php echo '<img src="data:image/jpeg;base64,' .base64_encode($row['prodImage']).'";'?>">
						</div>

						<div class="details">
							<h2><?php echo $row['prodName'];?></h2>
							<p><?php echo $row['prodAdd'];?><br> <?php echo $row['prodDesc'];?></p>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
		<section id="about">
			<div class="aboutus">
			<div class="about-section">
			  <h1>SAN FABIAN</h1>
			  <p>San Fabian is a mobile application meant to guide San Fabian tourists. Some of the features of the app is not available in here for the reason of having the goal to be portable. Please download the application to access full feature like searching nearby places, get route, Pangasinan dictionary and many more.<br>Here's our team:</p>
			</div>


			<!-- <h2 class="team">Our Team</h2> -->
			<div class="row">
			  <div class="column">
			    <div class="card1">
			      <img src="images/team/jolo.jpg" alt="Jolo" class="imgabout">
			      <div class="container1">
			        <h2>Jolo D. Castillo</h2>
			        <p class="title">Project Manager/System Dev.</p>
			        <p>BSIT Student in PHINMA-University of Pangasinan</p>
			        <p>jode.castillo@up.phinma.edu.ph</p>
			        <p>
			        	<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=jode.castillo@up.phinma.edu.ph&body=your-text">
			        		<button class="button">Contact</button>
			        	</a>
			        </p>
			      </div>
			    </div>
			  </div>

			  <div class="column">
			    <div class="card1">
			      <img src="images/team/barna.jpg" alt="Barna" class="imgabout">
			      <div class="container1">
			        <h2>John Vincent Barnachea</h2>
			        <p class="title">System Developer</p>
			        <p>BSIT Student in PHINMA-University of Pangasinan</p>
			        <p>joto.barnachea@up.phinma.edu.ph</p>
			        <p>
			        	<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=joto.barnachea@up.phinma.edu.ph&body=your-text">
			        		<button class="button">Contact</button>
			        	</a>
			        </p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="column">
			    <div class="card1">
			      <img src="images/team/mj1.jpg" alt="Jane" class="imgabout">
			      <div class="container1">
			        <h2>Mary Jane Rosario</h2>
			        <p class="title">System Analyst/Web Developer</p>
			        <p>BSIT Student in PHINMA-University of Pangasinan</p>
			        <p>mapa.rosario@up.phinma.edu.ph</p>
			        <p>
			        	<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=mapa.rosario@up.phinma.edu.phinma&body=your-text">
			        		<button class="button">Contact</button>
			        	</a>
			        </p>
			      </div>
			    </div>
			  </div>

			  <div class="column">
			    <div class="card1">
			      <img src="images/team/jelia.jpg" alt="Jelia" class="imgabout">
			      <div class="container1">
			        <h2>Jelia Tanguilig</h2>
			        <p class="title">Document Writer</p>
			        <p>BSIT Student in PHINMA-University of Pangasinan</p>
			        <p>jehe.tanguilig@up.phinma.edu.ph</p>
			        <p>
			        	<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=jehe.tanguilig@up.phinma.edu.ph&body=your-text">
			        		<button class="button">Contact</button>
			        	</a>
			        </p>
			      </div>
			    </div>
			  </div>

			  <div class="column">
			    <div class="card1">
			      <img src="images/team/ian.jpeg" alt="Ian" class="imgabout">
			      <div class="container1">
			        <h2>Ian Bruce De Guzman</h2>
			        <p class="title">Document Writer</p>
			        <p>BSIT Student in PHINMA-University of Pangasinan</p>
			        <p>iama.deguzman@up.phinma.edu.ph</p>
			        <p>
			        	<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=iama.deguzman@up.phinma.edu.ph&body=your-text">
			        		<button class="button">Contact</button>
			        	</a>
			        </p>
			      </div>
			    </div>
			  </div>
			</div>

			</div>	
			<div class="footer">
				<p>&copy; 2020 PHINMA-University of Pangasinan</p>
				
			</div>
		</section>
		
		<img src="images/img1.png" class="feature-img">
		<div class="social-links">
			<a href=""></a>
			<a href=""></a>
			<a href=""></a>
		</div>
	</div>


</body>
</html>