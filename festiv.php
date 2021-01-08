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
					      <a href="persona.php">Personalities</a>
					      <a href="#">Festivals</a>
					    </div>
					  </div> 
					</li>
					<li><h1>Festival in San Fabian</h1></li>
				</ul>
			</nav>
			
		</div>
		<?php  
			$mysqli = new mysqli('localhost', 'root', '', 'webDB') or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM festival") or die($mysqli->error);
			//pre_r($result);
		?>
		
		<div class="festivContainer">
			<?php while ($row = $result->fetch_assoc()):?>
			<div class="festiv">
				<div class="festivImage">
					<?php echo '<img src="data:image/jpeg;base64,' .base64_encode($row['festivImage']).'";'?>">
				</div>
				<div class="festivText">
					<span class="festivTitle"><?php echo $row['festivName'];?></span>
					<div class="festivDate"><?php echo $row['festivDate'];?></div>
					<p><?php echo $row['festivDesc'];?></p>
					
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		
	</div>

	<div class="footer">
		<p>&copy; 2020 PHINMA-University of Pangasinan</p>
	</div>
</body>
</html>