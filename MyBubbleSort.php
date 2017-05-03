<!DOCTYPE html>
<html>
<head>
	<title>My Bubble Sort</title>
</head>
<body>
<?php 
	function BubbleSort($array){
		for($a = 0; $a < count($array)-1; $a++){
			for($i = 0; $i < count($array)-1; $i++){
				$bubble = $array[$i];
				if($array[$i] > $array[$i+1]){
					$array[$i] = $array[$i+1];
					$array[$i+1] = $bubble;
				}
			}
		}
		return $array;
	}
	$myarray = [-5,9,7,3,4,1,7,5,2];
	echo 'Mảng trước khi được sắp xếp là: '.implode(',',$myarray);
	echo '<br>';
	echo 'Mảng sau khi được sắp xếp là: '.implode(',',BubbleSort($myarray));
?>
</body>
</html>