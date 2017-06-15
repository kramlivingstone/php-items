<?php  

$items = [
			 ['name'=> 'Artichoke',
			  'description' => 'A variety of a species of thistle cultivated as a food.',
			  'image' => 'img/artichoke.jpg',
			  'price' => 'Php 200.00',
			  'category' => 'Green'],	
			  ['name'=> 'Cabbage',
			  'description' => 'A variety of a species of thistle cultivated as a food.',
			  'image' => 'img/cabbage.jpg',
			  'price' => 'Php 150.00',
			  'category' => 'Green'],
			  ['name'=> 'Carrot',
			  'description' => 'A variety of a species of thistle cultivated as a food.',
			  'image' => 'img/carrot.jpg',
			  'price' => 'Php 120.00',
			  'category' => 'Orange']
		  ];

	$category = array_unique(array_column($items,'category'));

	function create_dropdown($name,$option)
	{	
		echo "<select name='$name'>";
		echo "<option value='All'>All</option>";
		foreach ($option as $value) {
			if(isset($_POST[$name]) && $_POST[$name] == $value )
				echo "<option selected value='$value'>$value</option>";
			else
				echo "<option value='$value'>$value</option>";
		}	
		echo "</select>";
		echo " <input type='submit' name='submit' value='Submit'>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Vegetables</title>
	<!-- Skeleton CSS -->
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">

	<!-- External CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<form method="POST" action="">
	<?php create_dropdown('category',$category); ?>
</form>
<?php 

	// foreach ($items as $item) {
	// 		echo "<div class='row'>";
	// 		foreach ($item as $key => $value) {
	// 			if ($key == 'name')
	// 				echo "<div class='twelve column'>" . "<h3>" . $value ."</h3>" . "<br>";
	// 			elseif ($key =='description')
	// 				echo $value . "<br>";
	// 			elseif ($key == 'image')
	// 				echo "<img src=$value>" . "<br>";
	// 			elseif ($key == 'price')
	// 				echo $value . "</div>";
	// 		}
	// 		echo "<button class='button-primary'>Edit</button> ";
	// 		echo "<button class='button-primary'>Delete</button>";
	// 		echo "</div>";
	// 		echo "<hr>";
	// 	}  
	// Version 1.0
	
	foreach ($items as $item) {
		if(!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All')
		 {
				echo "<div class = 'row'>";
					echo "<div class = twelve column>";
						echo "<div class = six column> <h3>" . $item['name'] . "</h3></div>";
						echo "<div class= six column></div>";
						echo "<div class = six column><img src =". $item['image'] . "></div>";
						echo "<div class = six column>" . $item['description'] . "</div>";
						echo "<div class = six column>" . $item['price'] . "</div>";
					echo "</div>";
				echo "</div>";
				echo "<hr>";
		}	
	}

	// foreach ($items as $item) {
	// 	if (!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All') {
	// 		$name = $item['name'];
	// 		$description = $item['description'];
	// 		$price = $item['price'];
	// 		$image = $item['image'];
	// 		$category = $item['category'];
			
	// 		echo "$name <br> $description <br> $price <br> $image <br> $category <br><hr>";
	// 	}
	// }
	// Sir PeeJay version
	
 ?>
</div>
</body>
</html>