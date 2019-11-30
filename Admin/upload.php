<html>
<head>
</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data" name="uploadImage" id="uploadImage"> 
			<p>
			<label for="image">Upload image:</label>
			<input type="file" name="image" id="image" />
			</p>
			<p>
			<input type="submit" name="upload" id="upload" value="Upload" />
			</p>
		</form>
				<pre>
				<?php
				// define a constant for the maximum upload size
				if (array_key_exists('upload', $_POST)) {
				print_r($_FILES);
				}
				?>
				</pre>
			
			<?php
			if (array_key_exists('upload', $_POST)) {
			// define constant for upload folder
			define('UPLOAD_DIR', 'C:/uploadTest/');//You can change this at will
			
			// replace any spaces in original filename with underscores
			// at the same time, assign to a simpler variable
			$file = str_replace(' ', '_', $_FILES['image']['name']);
			
			
			// move the file to the upload folder and rename it
			move_uploaded_file($_FILES['image']['tmp_name'], 
			UPLOAD_DIR.$_FILES['image']['name']);
			}
			?>
			
			
	</body>
</html>