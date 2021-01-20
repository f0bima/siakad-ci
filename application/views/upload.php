<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD</title>
</head>
<body>
	<?php
		echo @$error;
	?>
	<!--LINE 8 KUDU ONO tinggal ganto base url  -->
	<form method="post" action="<?php echo base_url("upload/input")?>" enctype="multipart/form-data">
		CONTOH INPUT NAMA:<br>
		<input type="text" name="nama" value="Nama">
		<br>
		CONTOH INPUT FOTO:<br>
		<input type="file" name="foto">
		<br><br>
		<input type="submit" value="Submit">
	</form> 

</body>
</html>