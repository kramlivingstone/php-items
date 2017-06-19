<?php  


function get_title() {
	echo 'Vegetables';
}

function display_content() { 
	global $items;

	$category = array_unique(array_column($items,'category'));

	echo "<form method='POST' action=''>";
		create_dropdown('category',$category);
	echo "</form>";
		echo "<div class='row clearfix'>";
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
								echo "<input class='btn btn-primary' type='submit' name='view_more' value='View Details'>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
			}	

		}
		echo "</div>";
		if(isset($_SESSION['username']) === 'admin') {
			echo "<div class='row'>";
			echo "<p><a href='add_veggies.php' class='btn btn-primary' id='add_new'>Add New</a></p>";
			echo "</div>";
		}	

}	

require_once 'index.php';


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

