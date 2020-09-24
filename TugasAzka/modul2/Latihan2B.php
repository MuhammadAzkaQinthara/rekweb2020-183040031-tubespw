<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 2B</title>
	<style>
		
	</style>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>
		<?php 
			for ($x=1; $x <= 5; $x++) { echo"<tr>";if ($x%2==1) {
					for ($y=1; $y <= 5; $y++) {		
					echo"	<td>Baris $x, Kolom $y</td>";
				 	}
				 	} else{for ($y=1; $y <= 5; $y++){
				 	echo"<td>&nbsp</td>";}
				 }	
				}echo"</tr>";
		 ?>
	</table>
</body>
</html>