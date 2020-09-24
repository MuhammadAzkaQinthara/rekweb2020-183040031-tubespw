<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 2D</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 30px;
			border:1px solid black;
			float: left;
			margin: 2px;
			color: black;
		}
		.kotak1{
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
		.ganjil {
			background-color: #003;
			color: #fff;
		}
		.genap {
			background-color: #57e65a;
		}
	</style>
</head>
<body>
	<?php 
	for ($y=1; $y <= 5; $y++) { 
		for ($z=1; $z <= $y; $z++) { 
		if($y%2==1){
			print"<div class='kotak'>#$y</div>
				  <div class='kotak1 ganjil'>$z</div>
			      ";
		} else {print"<div class='kotak'>#$y</div>
				  <div class='kotak1 genap'>$z</div>
			      ";
		}		
		}
		print"<br><br><br><br>";
	}
	 ?>
</body>
</html>