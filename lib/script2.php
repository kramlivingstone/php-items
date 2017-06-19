<?php 

// $items = [
// 			 ['name'=> 'Artichoke',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/artichoke.jpg',
// 			  'price' => 'Php 200.00',
// 			  'category' => 'Green'],	
// 			  ['name'=> 'Cabbage',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/cabbage.jpg',
// 			  'price' => 'Php 150.00',
// 			  'category' => 'Green'],
// 			  ['name'=> 'Carrot',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/carrot.jpg',
// 			  'price' => 'Php 120.00',
// 			  'category' => 'Orange'],
// 			  ['name'=> 'Cabbage',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/cabbage.jpg',
// 			  'price' => 'Php 150.00',
// 			  'category' => 'Green'],
// 			  ['name'=> 'Cabbage',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/cabbage.jpg',
// 			  'price' => 'Php 150.00',
// 			  'category' => 'Green'],
// 			   ['name'=> 'Artichoke',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/artichoke.jpg',
// 			  'price' => 'Php 200.00',
// 			  'category' => 'Green']
// 		 ];

// $fp = fopen('vegetables.json', 'w');
// fwrite ($fp,json_encode($items, JSON_PRETTY_PRINT));
// fclose($fp);

//Retrieving data from JSON file;
$string = file_get_contents('vegetables.json');
$items = json_decode($string, true);


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


 ?>