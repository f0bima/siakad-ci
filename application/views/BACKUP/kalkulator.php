<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>KALKULATOR</h1>
	<?php 
		$this->load->helper('form');
		$options = array(
	        'small'         => 'Small Shirt',
	        'med'           => 'Medium Shirt',
	        'large'         => 'Large Shirt',
	        'xlarge'        => 'Extra Large Shirt',
		);

		$shirts_on_sale = array('small', 'large');
		echo form_dropdown('shirts', $options, 'large');
		echo form_dropdown('shirts', $options, $shirts_on_sale);
	?>
	<form method="POST" action="http://localhost/ci/Mycontroller2/hitung">
		Bilangan Pertama<br>
		<input type="text" name="b1" value=<?=@$b1?>><br>
		Bilangan Kedua<br>
		<input type="text" name="b2"><br>
		<input type="submit" name="op" value="+">
		<input type="submit" name="op" value="-">
		<input type="submit" name="op" value="X">
		<input type="submit" name="op" value="/">
	</form>	
	<?=@$a?>
	

</body>
</html>