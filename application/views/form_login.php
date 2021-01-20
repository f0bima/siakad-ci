<?php
?>
<div class="form-wrap">
    <?php if (isset($error)) { ?>
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="zmdi zmdi-alert-circle-o pr-15 pull-left"></i><p class="pull-left"><?php echo "$error"; ?></p>
            <div class="clearfix"></div>
        </div>
    <?php } ?>
    <form method="post" action="<?php echo base_url("login/proses")?>">
        <div class="form-group">
            <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
            <input type="email" class="form-control" required="" id="exampleInputEmail_2" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
            <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>
            <div class="clearfix"></div>
            <input type="password" class="form-control" required="" id="exampleInputpwd_2" name="password" placeholder="Enter pwd">
        </div>

        <div class="form-group">
            <div class="checkbox checkbox-primary pr-10 pull-left">
                <input id="checkbox_2" required="" type="checkbox">
                <label for="checkbox_2"> Keep me logged in</label>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-info btn-rounded">sign in</button>
        </div>
    </form>
</div>