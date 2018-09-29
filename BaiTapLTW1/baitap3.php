<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai Tap 3</title>
</head>
<body>
	<?php
		include("baitap3a.php");
		$n = 71;
		// Kiem tra so nguyen to
		if(ktSoNT($n))
		{
			echo $n. " La so nguyen to<br>";
		}
		else
		{
			echo $n." Khong phai so nguyen to<br>";
		}
		// Kiem tra so hoan hao
		if(ktSoHH($n) == $n)
		{
			echo $n." La so hoan hao<br>";
		}
		else
		{
			echo $n." Khong la so hoan hao<br>";
		}
	?>
</body>
</html>