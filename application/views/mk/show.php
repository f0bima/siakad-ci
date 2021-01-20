<?php $this->load->view('msg.php') ?>
<thead>
    <tr>
        <th>KODE MK</th>
        <th>MATKUL</th>
        <th>SKS</th>
        <th>SMT</th>
        <?php         
        if ($this->session->role == "Admin"){
            echo "<th style='text-align: center;'>ACTION</th>";
        }
        ?>
    </tr>
</thead>
<tfoot>
    <tr>
        <th>KODE MK</th>
        <th>MATKUL</th>
        <th>SKS</th>
        <th>SMT</th>
        <?php         
        if ($this->session->role == "Admin"){
            echo "<th style='text-align: center;'>ACTION</th>";
        }
        ?>
    </tr>
</tfoot>
<tbody>
    <?php 
	foreach ($hasil as $datamk){
		echo "<tr>";
			echo "<td>".$datamk->kodemk."</td>";
			echo "<td>".$datamk->matkul."</td>";
            echo "<td>".$datamk->sks."</td>";
            echo "<td>".$datamk->smt."</td>";			
            if ($this->session->role == "Admin"){
            echo "<td style='text-align: center;'><a href='#myModal' id='custId' data-toggle='modal' data-id=".$datamk->kodemk."><button class='btn btn-primary btn-anim'><i class='fa fa-pencil-square-o'></i><span class='btn-text'>Detail</span></button></a> ";
          
                echo "<a onclick='deletedata(\"".$datamk->kodemk."\")' href='#' data-toggle='tooltip' data-placement='bottom' title='Hapus Mahasiswa' ><button class='btn btn-danger btn-anim'><i class='fa fa-trash-o'></i><span class='btn-text'>delete</span></button></a>
                </td>";        	
            }
											        	
		echo "</tr>";
	}
	?>
</tbody>