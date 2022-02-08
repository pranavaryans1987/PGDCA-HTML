<?php
	if(isset($_FILES["fileToUpload"])) 
	{
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		echo "Uploaded";
	}
?>
<form action="insert_id.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="fileToUpload" required />
	<input type="submit" value="Upload" />
</form>
