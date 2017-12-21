<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$gameworld = "gameworld";
	$CatId = 0;

?>
<!DOCTYPE html>
<html>
<head>   
	<meta charset="UTF-8">
    <meta name="description" content="Positionering">
	<link rel="stylesheet" type="text/css" href="css/style-sheet.css">
	<title></title>
</head>
<body>
	<div class="games">
		<h1>Games</h1>
		<?php
			// Create connection
			$conn = new mysqli($servername, $username, $password, $gameworld);

			// Check connection
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
				} 

			if (isset($_GET["category_id"])) {
    			$CatId = $_GET["category_id"];
				$sql = "SELECT * FROM gamedata WHERE GameCategoryId = $CatId";
				$result = $conn->query($sql);
			}
			else{
				$sql = "SELECT * FROM gamedata";
				$result = $conn->query($sql);
			}
			?>
		<div id="idcat_name">
			<?php

			if ($CatId == 1) {
		 		echo "<h2>Xbox</h2>";
			}
			else if ($CatId == 2) {
				echo "<h2>Playstation</h2>";
			}
			else if ($CatId == 3) {
				echo "<h2>PC</h2>";
			}
			else if ("") {
			}
		 	?>
		</div>
				
		<?php
			if ($result->num_rows > 0) {
   				// output data of each row
    			while($row = $result->fetch_assoc()) {

    		?>
    			<div id="main-card">
					<img src="<?php echo $row["GameImage"]; ?>" width="200" height="180">
					<div class="price">€<?php echo $row["GamePrice"]; ?></div>
					<div class="name"><?php echo $row["GameTitle"]; ?></div>
					<div class="order">ORDER NOW</div>
					<div class="clearfix"></div>
				</div>

    		<?php
        		
    			}
			} 
			else {
    				echo "0 results";
				}
				$conn->close();
			?>
		<div class="clearfix"></div>
	</div>
</body>
</html>