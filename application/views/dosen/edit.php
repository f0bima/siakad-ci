<?php 
if (empty($dsn->nip) ) {
    redirect('Dsn');
}
else{
?>
<form class="form-horizontal" method="post" action="<?php echo base_url("Dsn/upd")?>">
    <div class="form-group">
        <label for="exampleInputuname_3" class="col-sm-3 control-label">NIP</label>
        <div class="col-sm-9">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-book"></i></div>
                <input type="hidden" class="form-control" id="exampleInputuname_3" required=""  name="nip" value="<?php echo $dsn->nip?>">
                <input type="text" disabled="disabled" style="color: #000" class="form-control" id="exampleInputuname_3" required=""  name="nip" value="<?php echo $dsn->nip?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputuname_3" class="col-sm-3 control-label">Nama</label>
        <div class="col-sm-9">
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                <input type="text" class="form-control" id="exampleInputuname_3" required="" name="nama" value="<?php echo $dsn->namadsn?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputweb_31" class="col-sm-3 control-label">Alamat</label>
        <div class="col-sm-9">
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-globe"></i></div>
                <input type="text" class="form-control" id="exampleInputweb_31" required="" name="alamat" value="<?php echo $dsn->alamat?>">
            </div>
        </div>
    </div>    
    <div class="form-group">
        <label for="exampleInputweb_31" class="col-sm-3 control-label">Tgl Lahir</label>
        <div class="col-sm-9">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-wpforms"></i></div>
                <input type="date" class="form-control" id="exampleInputweb_31" required="" name="tgl" value="<?php echo $dsn->tgl?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputpwd_4" class="col-sm-3 control-label">Gender</label>

        <?php 
										if ($dsn->jk =="Laki-Laki") {			
										?>
        <div class="radio-inline">
            <span class="radio radio-info">
													<input type="radio" name="jk" id="radio_5" value="Laki-Laki" checked>
													<label for="radio_5">Laki-Laki</label>
												</span>
        </div>
        <div class="radio-inline">
            <span class="radio radio-info">
													<input type="radio" name="jk" id="radio_6" value="Perempuan">
													<label for="radio_6">Perempuan</label><br>
												</span>
        </div>
        <?php 
										}	
										else {
										?>
        <div class="radio-inline">
            <span class="radio radio-info">				
													<input type="radio" name="jk" id="radio_5" value="Laki-Laki">
													<label for="radio_5">Laki-Laki</label>
												</span>
        </div>
        <div class="radio-inline">
            <span class="radio radio-info">
													<input type="radio" name="jk" id="radio_6" value="Perempuan" checked>
													<label for="radio_6">Perempuan</label><br>
												</span>
        </div>

        <?php 
										}	
										?>
    </div>    
    <div class="form-group mb-0">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-info ">EDIT</button>
        </div>
    </div>
</form>
<?php } ?>