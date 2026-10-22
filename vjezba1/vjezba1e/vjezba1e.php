<!DOCTYPE html>
<html>
	<head>
		<title>Izracun</title>
	</head>
<body>
		<?php
			$_a=$_POST['a'];
			$_b=$_POST['b'];
			$c=(3*$_a-$_b)/2;
			print '
			<div class="odlomak">
				<p class="vra">a='.$_a .'</p>
				<p>b='.$_b .'</p>
				<p>c=(3*'.$_a.'-'.$_b.')/2='.$c .'</p>
			</div>';
		?>
	</body>
</html>
