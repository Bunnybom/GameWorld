<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<div id="main-container">
	<header class="header">
		<div id="logo">
			<li><a href="index.php">Game<div class="text-red">Stop</div></a></li>
		</div>
		<div class="clearfix"></div>
	</header>
    <meta charset="UTF-8">
    <meta name="description" content="Positionering">
    <link rel="stylesheet" type="text/css" href="css/style-sheet.css">
    <title>GameStop</title>
</head>
<body>
		<nav>
			<?php
				include("inc/menu.php");
			?>

		</nav>
		<div id="container-image">
			<div id="banner">
				<img src="image/banner.jpg" width="980">
				<ul>
					<li class="banner-text1">Welcome to GameStop</li>
					<li class="banner-text2">The Worlds best online gameshop!</li>
				</ul>
			</div>

			<div class="gamestation"><a href="games.php?category_id=1"><img src="image/xbox.jpg"></a></div>
			<div class="gamestation"><a href="games.php?category_id=2"><img src="image/playstation.jpg"></a></div>
			<div class="gamestation1"><a href="games.php?category_id=3"><img src="image/pc.jpg" width="200" height="200"></a></div>
			<div class="clearfix"></div>
		</div>
		<nav>	
			<footer>
			<?php
			 	include("inc/footer.php");
			?>
			</footer>
		</nav>
	</div>
</body>
</html>