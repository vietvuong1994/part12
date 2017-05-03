<!DOCTYPE html>
<html>
<head>
	<title>My Insertion Sort</title>
</head>
<body>
<?php 
	function InsertionSort($array){
		for($i = 0; $i < count($array); $i++){
			$result[] = $array[$i];
			for($j = count($result)-1; $j > 0 ; $j--){
				$insert = $result[$j];	
				if($result[$j] < $result[$j-1]){
					$result[$j] = $result[$j-1];
					$result[$j-1] = $insert; 
				}
			}	
		}
		return $result;
	}
	$myarray = [-5,9,7,3,4,1,7,5,2];

	echo 'Mảng trước khi được sắp xếp là: '.implode(',',$myarray);
	echo '<br>';
	echo 'Mảng sau khi được sắp xếp là: '.implode(',',InsertionSort($myarray));
?>
</body>
</html>