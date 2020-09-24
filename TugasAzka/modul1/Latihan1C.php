	<!DOCTYPE>
	<html>
	<head>
		<title>Latihan 1C</title>
		<style>
			.kotakx {
				width: 164px;
				height: 164px;
				border: 1px solid black;
				padding: 15px; 
			}
			.kotaky {
				width: 50px;
				height: 50px;
				border: 1px solid black;
				display: inline-block;
				text-align: center;
				line-height: 50px;
			}
		</style>
	</head>
	<body>
		<?php 
			$x = "A";
			$y = "B";
			$z = "C";
		echo"<div class='kotakx'>
					<div class='kotaky'>$x
						</div>
					<div class='kotaky'>$x
						</div>
					<div class='kotaky'>$x
						</div><br>
					<div class='kotaky'>$y
						</div>
					<div class='kotaky'>$y
						</div><br>
					<div class='kotaky'>$z
						</div>
			</div>";			
		?>
	</body>
	</html>