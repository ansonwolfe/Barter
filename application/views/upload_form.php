<html>
<head>
<title>Upload Form</title>
</head>
<body>

	<div id="upload">
		<?php echo $error;?>
		<?php echo form_open_multipart('upload/do_upload');
				// echo form_upload('userfile');
				// echo form_submit('upload', 'upload');
				// echo form_close();		
		?>
		

		<input type="file" name="userfile" size="20" />
		<br /><br />
		<input type="submit" value="upload" />

		</form>
	</div>
</body>
</html>
