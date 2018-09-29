<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai Tap 1</title>
</head>
<body>
Mang sau: 
<?php $number = array(1,2,3,4,5,6,7,8,9); ?>
	<?php for($i = 0; $i < count($number); $i++): ?>
		<?php echo " ".$number[$i]; ?>
	<?php endfor?>
	<br>
Tim kiem so 5:
<?php $temp = 0; ?>
	<?php for($i = 0; $i < count($number); $i++):
	{
		$temp++;
		if($number[$i] == 5)
		{
			echo "Co so 5";
			echo "<br>" ;
			echo "So lan so sanh: ".$temp;
			return;
		}
	}
	?>
	<?php endfor?>
	<?php echo "Khong co so 5"; ?>
</body>
</html>
