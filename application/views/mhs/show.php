<?php $this->load->view('msg.php') ?>
<thead>
    <tr>
        <th>NIM</th>
        <th>NAMA MAHASISWA</th>
        <th>TGL</th>
        <th>ALAMAT</th>
        <th>GENDER</th>
        <?php         
        if ($this->session->role == "Admin"){
            echo "<th style='text-align: center;'>ACTION</th>";
        }
        ?>
    </tr>
</thead>
<tfoot>
    <tr>
        <th>NIM</th>
        <th>NAMA MAHASISWA</th>
        <th>TGL</th>
        <th>ALAMAT</th>
        <th>GENDER</th>
        <?php         
        if ($this->session->role == "Admin"){
            echo "<th style='text-align: center;'>ACTION</th>";
        }
        ?>
    </tr>
</tfoot>
<tbody>
    <?php 
	foreach ($hasil as $datamhs){
		echo "<tr>";
			echo "<td>".$datamhs->nim."</td>";
			echo "<td>".$datamhs->namamhs."</td>";
			echo "<td>".$datamhs->tgl."</td>";
			echo "<td>".$datamhs->alamat."</td>";
            echo "<td>".$datamhs->jk."</td>";
            if ($this->session->role == "Admin"){
            echo "<td style='text-align: center;'><a href='#myModal' id='custId' data-toggle='modal' data-id=".$datamhs->nim."><button class='btn btn-primary btn-anim'><i class='fa fa-pencil-square-o'></i><span class='btn-text'>Detail</span></button></a> ";
            
                  echo "<a onclick='deletedata(\"".$datamhs->nim."\")' href='#' data-toggle='tooltip' data-placement='bottom' title='Hapus Mahasiswa' ><button class='btn btn-danger btn-anim'><i class='fa fa-trash-o'></i><span class='btn-text'>delete</span></button></a>
                </td>"; 
            }       	
											        	
		echo "</tr>";
	}
	?>
</tbody>