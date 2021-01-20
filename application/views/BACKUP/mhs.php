<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-collapse: collapse;			
		}
		td, th{
			border: 1px solid black;
			padding: 5px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>NIM</th>
			<th>NAMA</th>
			<th>TGL</th>
			<th>ALAMAT</th>
			<th>GENDER</th>
			<th>ACTION</th>
		</tr>
		<?php 
			foreach ($mhs as $datamhs){
	        	echo "<tr>";
	        	echo "<td>".$datamhs->nim."</td>";
	        	echo "<td>".$datamhs->namamhs."</td>";
	        	echo "<td>".$datamhs->tgl."</td>";
	        	echo "<td>".$datamhs->alamat."</td>";
	        	echo "<td>".$datamhs->jk."</td>";
	        	/*echo "<td><a href='Database/edit/".$datamhs->nim."'>EDIT</a> | <a href='Database/delete/".$datamhs->nim."'>HAPUS</a></td>";	*/
	        	echo "<td>".anchor("Database/delete/".$datamhs->nim,"HAPUS");        	
	        	echo "</tr>";
			}
		?>
	</table>
</body>
</html>