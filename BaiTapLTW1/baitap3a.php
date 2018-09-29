<?php
	function ktSoNT($n)
	{
		for($i = 2; $i < sqrt($n); $i++)
		{
			if($n % $i == 0)
			{
				return false;
			}
		}
		return true;
	}
	function ktSoHH($n)
	{
		$temp = 0;
		for($i = 1; $i < $n; $i++)
		{
			if($n % $i == 0)
			{
				$temp+= $i;
			}
		}
		return $temp;
	}
?>