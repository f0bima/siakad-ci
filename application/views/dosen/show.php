<?php $this->load->view('msg.php') ?>
<thead>
    <tr>
        <th>NIP</th>
        <th>NAMA DOSEN</th>        
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
        <th>NIP</th>
        <th>NAMA DOSEN</th>        
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
	foreach ($hasil as $datadsn){
		echo "<tr>";
			echo "<td>".$datadsn->nip."</td>";
			echo "<td>".$datadsn->namadsn."</td>";			
            echo "<td>".$datadsn->tgl."</td>";
			echo "<td>".$datadsn->alamat."</td>";
            echo "<td>".$datadsn->jk."</td>";
            if ($this->session->role == "Admin"){
            echo "<td style='text-align: center;'><a href='#myModal' id='custId' data-toggle='modal' data-id=".$datadsn->nip."><button class='btn btn-primary btn-anim'><i class='fa fa-pencil-square-o'></i><span class='btn-text'>Detail</span></button></a>	";
            
                echo "<a onclick='deletedata(\"".$datadsn->nip."\")' href='#' data-toggle='tooltip' data-placement='bottom' title='Hapus Mahasiswa' ><button class='btn btn-danger btn-anim'><i class='fa fa-trash-o'></i><span class='btn-text'>delete</span></button></a>
				</td>";        	
            }
				
											        	
		echo "</tr>";
	}
	?>
</tbody>