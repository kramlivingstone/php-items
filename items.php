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
			  'category' => 'Orange'],
			  ['name'=> 'Cabbage',
			  'description' => 'A variety of a species of thistle cultivated as a food.',
			  'image' => 'img/cabbage.jpg',
			  'price' => 'Php 150.00',
			  'category' => 'Green'],
			  ['name'=> 'Cabbage',
			  'description' => 'A variety of a species of thistle cultivated as a food.',
			  'image' => 'img/cabbage.jpg',
			  'price' => 'Php 150.00',
			  'category' => 'Green'],
			   ['name'=> 'Artichoke',
			  'description' => 'A variety of a species of thistle cultivated as a food.',
			  'image' => 'img/artichoke.jpg',
			  'price' => 'Php 200.00',
			  'category' => 'Green']
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
		echo " <input type='submit' name='submit' value='Submit'> <br>";
	}


require_once 'top.php';

echo "<form method='POST' action=''>";
	create_dropdown('category',$category);
echo "</form>";
	echo "<div class='row'>";
	foreach ($items as $item) {
		if(!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All')
		 {
				echo "<div class='col-sm-6 col-md-4'>";
					echo "<div class='thumbnail'>";
						echo "<img id='itemImage' src =" . $item['image'] . " alt='vegetables'>";
						echo "<div class='caption'>";
							echo "<h3>" . $item['name'] . "</h3>";
							echo "<p>" . $item['description'] . "</p>";
							echo "<p>" . $item['price'] . "</p>";
							echo "<p><a href='#' class='btn btn-primary' role='button'> View Details</a><p>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
		}	

	}
	echo "</div>";

require_once 'bottom.php';






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
?>

