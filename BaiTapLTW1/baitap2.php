<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai Tap 2</title>
</head>
<body>
	<?php
		$number = array(1,2,3,4,5,6,7,8,9);
		echo "Mang dau tien: ";
		for($i = 0; $i < count($number); $i++)
		{
			echo " ".$number[$i];
		}
		echo "<br>Mang sau khi sap sep: ";
		$dem = 0; 
		for($i = 0; $i < count($number) - 1; $i++){
			for($j = $i + 1; $j < count($number); $j++){
				if($number[$i] < $number[$j]){
					$dem++;
					$temp = $number[$i];
					$number[$i] = $number[$j];
					$number[$j] = $temp;
				}
			}
		}
		for($i = 0; $i < count($number); $i++)
		{
			echo " ".$number[$i];
		}	
		echo "<br>So lan hoan doi: ".$dem;
	?>
</body>
</html>