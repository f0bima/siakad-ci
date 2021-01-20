<?php 
if (empty($mk->kodemk) ) {
    redirect('Mk');
}
else{
?>
<form class="form-horizontal" method="post" action="<?php echo base_url("Mk/upd")?>">
    <div class="form-group">
        <label for="exampleInputuname_3" class="col-sm-3 control-label">Kode MK</label>
        <div class="col-sm-9">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-book"></i></div>
                <input type="hidden" class="form-control" id="exampleInputuname_3" required="" name="kodemk" value="<?php echo $mk->kodemk?>">
                
                <input type="text" disabled="disabled" style="color: #000" class="form-control"  name="kodemk" value="<?php echo $mk->kodemk?>">
                
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputuname_3" class="col-sm-3 control-label">Matkul</label>
        <div class="col-sm-9">
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                <input type="text" class="form-control" id="exampleInputuname_3" required="" name="matkul" value="<?php echo $mk->matkul?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputweb_31" class="col-sm-3 control-label">Sks</label>
        <div class="col-sm-9">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-check-square"></i></div>
                <input type="number" class="form-control" id="exampleInputweb_31" required="" name="sks" value="<?php echo $mk->sks?>">
            </div>
        </div>
    </div>    
    <div class="form-group">
        <label for="exampleInputweb_31" class="col-sm-3 control-label">Smt</label>
        <div class="col-sm-9">
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-globe"></i></div>
                <input type="number" class="form-control" id="exampleInputweb_31" required="" name="smt" value="<?php echo $mk->smt?>">
            </div>
        </div>
    </div>    
    
    <div class="form-group mb-0">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-info ">EDIT</button>
        </div>
    </div>
</form>
<?php 
}
?>