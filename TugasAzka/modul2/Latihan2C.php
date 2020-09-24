<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 2C</title>
	<style>
		.kotakx{
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 30px;
			border:1px solid black;
			float: left;
			margin: 2px;
			color: black;
		}
		.kotaky{
			background-color: #57e65a;
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 30px;
			border:1px solid black;
			float: left;
			margin: 2px;
			color: black;
		}
		.clear{
		}
	</style>
</head>
<body>
	<?php 
	for ($y=1; $y <= 5; $y++) { 
		for ($z=1; $z <= $y; $z++) { 
			print"<div class='kotakx'>#$y</div>
				  <div class='kotaky'>$y</div>
			      ";
		}print"<br><br><br><br>";
	}
	 ?>
</body>
</html>