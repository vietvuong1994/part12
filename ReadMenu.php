<?php
	include('DBcon.php');
	$new = new DB_con;
	$categories = $new->select('SELECT * FROM Menu');
	
	function CallMenu($categories, $parentid = 0){
		$parent = array();
		foreach ($categories as $key => $item){
			if ($item['Parent_ID'] == $parentid){
				$parent[] = $item;
				unset($categories[$key]);
			}
		}
		//var_dump($parent);//parent id 0
    	//var_dump($categories);//parent id 1 4
		if($parent){
			echo '<ul>';
			foreach ($parent as $key => $item){
				echo '<li>'.$item['Title'];
				CallMenu($categories, $item['id']);
				echo '</li>';
			}
			echo '</ul>';
		}
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Read Menu</title>
</head>
<body>
<?php CallMenu($categories); ?>
</body>
</html>