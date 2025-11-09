<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello World!</title>
</head>
<body>

	<form action="" method="POST" enctype="multipart/form-data">
		<label>Select file to upload</label><br><br>
		<input type="file" name="myfiles"><br><br>
		<input type="submit" name="upload" value="upload">
	</form>

</body>
</html>


<?php 

	if (isset($_POST['upload'])) {
		$fileName = $_FILES['myfiles']['name'];
		$tempPath = $_FILES['myfiles']['tmp_name'];
		$target = "upload/".$fileName;
		// print_r($_FILES);


		if (move_uploaded_file($tempPath, $target)) {
			echo "successfully upload";
		}
		else{
			echo "upload failed";
		}
	}
 ?>