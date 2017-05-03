<!DOCTYPE html>
<html>
<head>
	<title>My Quick Sort</title>
</head>
<body>
<?php 
	function QuickSort($array){
		if(count($array)<2){
			return $array;
		}
		$pivot = $array[0];
		$low = $high = array();
		for($i = 1; $i < count($array); $i++){
			if($array[$i] <= $pivot){
				$low[] = $array[$i];
			}
			else{
				$high[] = $array[$i]; 
			}
		}
		return array_merge(QuickSort($low),array($pivot),QuickSort($high));
		
	}
	$myarray = [-5,9,7,3,4,1,7,5,2];
	echo 'Mảng trước khi được sắp xếp là: '.implode(',',$myarray);
	echo '<br>';
	echo 'Mảng sau khi được sắp xếp là: '.implode(',',QuickSort($myarray));
?>
</body>
</html>