<?php 

	if (isset($_POST['btn'])) {

		$n = $_POST['size'];
		$pat = $_POST['pattern'];

		function pattern_1 ($n){
			for ($i=1; $i <= $n; $i++) {

				for ($j=1; $j <= $i; $j++) { 
						echo "*";
					}
				echo "<br>";
			}
		}

		function pattern_2($n){
			for ($i=1; $i <= $n; $i++) { 

				for ($j=1; $j <= $n - $i; $j++) { 
						echo "&nbsp;&nbsp;";
					}
				for ($j=1; $j <= $i; $j++) { 
							echo "*";
						}
				echo "<br>";
				}
		}

		function pattern_3($n){

			for ($i=1; $i <= $n; $i++) { 

				for ($j=1; $j <= $n - $i; $j++) { 
						echo "&nbsp;&nbsp;";
					}
				for ($j=1; $j <= $i*2-1; $j++) { 
							echo "*";
						}
				echo "<br>";
				}
		}

		function pattern_4($n){
			
			for ($i=1; $i <= $n; $i++) { 

				for ($j=1; $j <= $n - $i; $j++) { 
						echo "&nbsp;&nbsp;";
					}
				for ($j=1; $j <= $i*2-1; $j++) { 
							echo "*";
						}
				echo "<br>";
				}
			for ($i= $n-1; $i >= 1; $i--) { 

				for ($j=1; $j <= $n - $i; $j++) { 
						echo "&nbsp;&nbsp;";
					}

				for ($j=1; $j <= $i*2-1; $j++) { 
							echo "*";
						}
				
				echo "<br>";
				}
		}


		if ($pat == "pattern_one") {

			pattern_1($n);
			
		}

		elseif ($pat == "pattern_two") {
			
			pattern_2($n);

		}

		elseif ($pat == "pattern_three") {
			
			pattern_3($n);

		}
		elseif ($pat == "pattern_four") {
			
			pattern_4($n);

		}
		
	}

	

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pattern</title>
</head>
<body>

	<form action="" method="POST">
		<select name="size">
			<option value="5" <?php echo (isset($_POST['size']) && $_POST['size'] == '5') ? 'selected="selected"' : "" ;;?> >Small</option>
			<option value="7" <?php echo (isset($_POST['size']) && $_POST['size'] == '7') ? 'selected="selected"' : "" ;;?>>Medium</option>
			<option value="9" <?php echo (isset($_POST['size']) && $_POST['size'] == '9') ? 'selected="selected"' : "" ;; ?>>Large</option>
		</select>
		<select name="pattern">
			<option value="pattern_one" <?php echo (isset($_POST['pattern']) && $_POST['pattern'] === "pattern_one") ? 'selected="selected"' : "" ?>>partten 1</option>
			<option value="pattern_two" <?php echo (isset($_POST['pattern']) && $_POST['pattern'] === "pattern_two") ? 'selected="selected"' : "" ?>>partten 2</option>
			<option value="pattern_three" <?php echo (isset($_POST['pattern']) && $_POST['pattern'] === "pattern_three") ? 'selected="selected"' : "" ?>>partten 3</option>
			<option value="pattern_four" <?php echo (isset($_POST['pattern']) && $_POST['pattern'] === "pattern_four") ? 'selected="selected"' : "" ?>>partten 4</option>
		</select>
		<input type="submit" name="btn" value="show">
	</form>

</body>
</html>


<?php 

	// function sayHello() {

	// 	echo "Hello World";

	// }

	// sayHello();

	// echo "<br>";	echo "<br>";

	// function hello($name){

	// 	echo "Hello, $name";

	// }

	// hello("Manjurul Hasan");

	// echo "<br>";	echo "<br>";

	// function add($a,$b)
	// {
	// 	return $a + $b ;
	// }

	// $result = add(10,22);

	// echo "Sum : $result";

	// echo "<br>";	echo "<br>";

	
?>
