<!DOCTYPE html>
<html>
<head>
	<title>TOURIST SPOTS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/applogo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />

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
					      <a href="#">Tourist Spots</a>
					      <a href="persona.php">Personalities</a>
					      <a href="festiv.php">Festivals</a>
					    </div>
					  </div> 
					</li>
					<li><h1>Tourist Spots in San Fabian</h1></li>
				</ul>
			</nav>		
		</div>
		<?php  
			$mysqli = new mysqli('localhost', 'root', '', 'webDB') or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM tSpot") or die($mysqli->error);
			//pre_r($result);
		?>
		<div class="tSpot">
			<?php while ($row = $result->fetch_assoc()):?>
			<div class="cardTspot">
				<div class="tSpot-image">
					<?php echo '<img src="data:image/jpeg;base64,' .base64_encode($row['tSpotImage']).'";'?>">
				</div>
				<div class="tSpot-text">
					<span class="date"><?php echo $row['tSpotAdd'];?></span>
					<h2><?php echo $row['tSpotName'];?></h2>
					<p><?php echo $row['tSpotDesc'];?>
						<?php
							$link = $row['tSpotLink'];
							$text = "";
							if ($link == "") {
								$text = "";
								//print("walang link");
							} else {
								$text = "Visit Site";
								//print("merong link");
							}
						?>
						<br><a href="<?php echo $row['tSpotLink'];?>"><?php echo $text;?></a>
						<!-- <br><a href="<?php echo $row['tSpotLink'];?>">Visit Site</a> -->
					</p>
				</div>
			</div>
			<?php endwhile; ?>	
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>

	<div class="footer">
		<p>&copy; 2020 PHINMA-University of Pangasinan</p>
	</div>
<!-- 				<div class="tSpot-stats">
					<div class="stat">
						<div class="value">4</div>
						<div class="type">read</div>
					</div>
					<div class="stat">
						<div class="value">4</div>
						<div class="type">read</div>
					</div>
					<div class="stat">
						<div class="value">4</div>
						<div class="type">read</div>
					</div>
				</div>
 -->
</body>
</html>