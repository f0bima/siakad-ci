<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>PENJUMLAHAN</h1>
	<form method="POST" action="http://localhost/ci/Mycontroller2/hasil">
		Bilangan Pertama<br>
		<input type="text" name="b1" value=<?=@$b1?>><br>
		Bilangan Kedua<br>
		<input type="text" name="b2"><br>
		<input type="submit" name="submit" value="JUMLAH">
	</form>
	<?=@$tambah?>
</body>
</html>