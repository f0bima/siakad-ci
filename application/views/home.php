<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">

        
<?php 
        /*
        <!-- Row -->
        <div class="row">
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box bg-yellow">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-light block counter"><span class="counter-anim"><?php echo @$jdsn ?></span></span>
                                            <span class="weight-500 uppercase-font txt-light block">DOSEN</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="zmdi zmdi-redo txt-light data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box bg-green">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-light block counter"><span class="counter-anim"><?php echo @$jmhs ?></span></span>
                                            <span class="weight-500 uppercase-font txt-light block">MAHASISWA</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="zmdi zmdi-file txt-light data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box bg-blue">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-light block counter"><span class="counter-anim"><?php echo @$jmk ?></span></span>
                                            <span class="weight-500 uppercase-font txt-light block">MATA KULIAH</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
                                            <div id="sparkline_4" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
        */
?>

        <!-- Row -->
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view panel-refresh">
                    <div class="refresh-container">
                        <div class="la-anim-1"></div>
                    </div>
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">DATA </h6>
                        </div>                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body row pa-0">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>DATA</th>               
                                                <th>JUMLAH</th>
                                                <th>ACTION</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="txt-dark weight-500">Dosen</span></td>
                                                <td><span class="counter-anim"><?php echo @$jdsn ?></span>
                                                </td>
                                                <td>
                                                    <a href='<?php echo base_url('dsn') ?>'><button class='btn btn-primary btn-anim'><i class='fa fa-pencil-square-o'></i><span class='btn-text'>Detail</span></button></a>
                                                </td>                           
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500">Mahasiswa</span></td>
                                                <td><span class="counter-anim"><?php echo @$jmhs ?></span>
                                                </td>
                                                <td>
                                                    <a href='<?php echo base_url('Mhs') ?>' id='custId' data-toggle='modal' data-id=".$datamhs->nim."><button class='btn btn-primary btn-anim'><i class='fa fa-pencil-square-o'></i><span class='btn-text'>Detail</span></button></a>
                                                </td>                
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500">Mata Kuliah</span></td>
                                                <td><span class="counter-anim"><?php echo @$jmk ?></span>
                                                </td>
                                                <td>
                                                    <a href='<?php echo base_url('mk') ?>' id='custId' data-toggle='modal' data-id=".$datamhs->nim."><button class='btn btn-primary btn-anim'><i class='fa fa-pencil-square-o'></i><span class='btn-text'>Detail</span></button></a>
                                                </td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">

                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                                                                <div class="profile-box">
                                        <div class="profile-cover-pic">
                                            
                                            <div class="profile-image-overlay"></div>
                                        </div>
                                        <div class="profile-info text-center">
                                            <div class="profile-img-wrap">
                                                <img class="inline-block mb-10" src="<?php echo base_url('template') ?>/dist/img/mock1.jpg" alt="user"/>
                                                
                                            </div>  
                                            <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger"><?php echo $this->session->username;?></h5>
                                            <h6 class="block capitalize-font pb-20"><?php echo $this->session->role?></h6>
                                        </div>  
                                        
                                    </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- Row -->
    </div>

    <!-- Footer -->
    <footer class="footer container-fluid pl-30 pr-30">
        <div class="row">
            <div class="col-sm-6">
                <p><?php echo $this->session->role?> page</p>
            </div>
            <div class="col-sm-6">
                <p>2018 &copy; Fauzan Bima. PTIK 16 UNS</p>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

</div>
<!-- /Main Content -->


<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="<?php echo base_url('template');?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('template');?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url('template');?>/dist/js/jquery.slimscroll.js"></script>
	
	<!-- simpleWeather JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url('template');?>/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
	<script src="<?php echo base_url('template');?>/dist/js/simpleweather-data.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url('template');?>/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo base_url('template');?>/dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- ChartJS JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/chart.js/Chart.min.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('template');?>/vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url('template');?>/vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="<?php echo base_url('template');?>/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="<?php echo base_url('template');?>/dist/js/init.js"></script>
	<script src="<?php echo base_url('template');?>/dist/js/dashboard-data.js"></script>
	<script type="text/javascript">
		$.toast({
	    	heading: 'WELCOME',
	    	text: '<p>Selamat datang <?php echo $this->session->username;?>' ,
		    hideAfter: 5000, 
        	position: 'top-center', 
		    icon: 'success'
		})
	</script>