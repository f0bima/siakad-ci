<div class="form-wrap">
    <?php if (isset($error)) { ?>
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="zmdi zmdi-alert-circle-o pr-15 pull-left"></i><p class="pull-left"><?php echo "$error"; ?></p>
            <div class="clearfix"></div>
        </div>
    <?php } ?>
    <form  method="post" action="<?php echo base_url("register/proses")?>" data-toggle="validator" role="form">
        <div class="form-group">
            <label class="control-label mb-10" for="exampleInputName_1">Username</label>
            <input type="text" class="form-control" required="" id="exampleInputName_1" placeholder="Username" name="user">
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
            <input type="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
        <label for="inputPassword" class="control-label mb-10">Password</label>
        <div class="row">
            <div class="form-group col-sm-12">
                <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required name="pass">
                <div class="help-block">Minimum of 6 characters</div>
            </div>
            <div class="form-group col-sm-12">
                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
        <div class="form-group">
            <div class="checkbox checkbox-primary pr-10 pull-left">
                <input id="checkbox_2" required="" type="checkbox">
                <label for="checkbox_2"> I agree to all <span class="txt-primary">Terms</span></label>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-info btn-rounded">sign Up</button>
        </div>
    </form> 

</div>