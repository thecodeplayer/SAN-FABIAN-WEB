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
					<li><a href="home.php">HOME</a></li>
					<li>
						<div class="dropdown">
					    <button class="dropbtn">CATEGORIES 
					      <i class="fa fa-caret-down"></i>
					    </button>
					    <div class="dropdown-content">
					      <a href="tspots.php">Tourist Spots</a>
					      <a href="#">Personalities</a>
					      <a href="festiv.php">Festivals</a>
					    </div>
					  </div> 
					</li>
					<li><h1>Known Personalities in San Fabian</h1></li>
				</ul>
			</nav>
			
		</div>

		<?php  
			$mysqli = new mysqli('localhost', 'root', '', 'webDB') or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM personalities") or die($mysqli->error);
			//pre_r($result);
		?>
		<div class="persona">
			<div class="personacontainer">
				<?php while ($row = $result->fetch_assoc()):?>
				<div class="persona-box">
					<div class="persona-imgBox">
						<?php echo '<img src="data:image/jpeg;base64,' .base64_encode($row['personaImage']).'";'?>">
					</div>
					<div class="persona-details">
						<div class="persona-content">
							<h3><?php echo $row['personaName'];?></h3>
							<p><?php echo $row['personaDesc'];?></p>
						</div>
					</div>
				</div>
				<?php endwhile; ?>	
			</div>
		</div>
	</div>
	<div class="footer">
		<p>&copy; 2020 PHINMA-University of Pangasinan</p>
	</div>


</body>
</html>