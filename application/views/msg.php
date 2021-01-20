<?php 
if (isset($msg)) {   

switch ($msg) {
    case 0:
        ?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Input Data Berhasil 
        </div>
        <?php
        break;
    case 1:
        ?>
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Opps! Input data Gagal
        </div>
        <?php
        break;
    case 2:
        ?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Delete Data Berhasil 
        </div>
        <?php
        break;
    case 3:
        ?>
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Opps! Delete data Gagal
        </div>
        <?php
        break;
    case 4:
        ?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Update Data Berhasil 
        </div>
        <?php
        break;
    case 5:
        ?>
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Opps! Update data Gagal
        </div>
        <?php
        break;
}
}

         ?>