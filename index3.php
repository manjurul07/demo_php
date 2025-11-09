<?php 
	
	// file write

	$file = fopen("example.txt", "w");

	$html = "
				<h1>Hello World</h1>
				 <ul>
				 	<li>Apple</li>
				 	<li>Orange</li>
				 	<li>Banna</li>
				 </ul>
			";

	fwrite($file, $html);

	// file append

	$file = fopen("example.txt", "a");
	fwrite($file, "\n this line is added later");

	fclose($file);

	echo "File Created and Writen Successfully";
	echo $html;

	// file delete

	if (file_exists("example.txt")) {
		unlink("example.txt");

		echo "unlink successfully";
	}
	else {
		echo "File does not exits";
	}
 ?>

 