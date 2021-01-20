<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark"><?php echo "$jdl"; ?></h5>
					</div>
					
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="<?php echo base_url('');?>">Dashboard</a></li>						
						<li class="active"><span><?php echo "$jdl"; ?></span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div >
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><?php echo "$jdl"; ?></h6>
								</div>						
								<?php if ($this->session->role == "Admin") {
									
								?>
								<div style="float: right; ">
									<a href="#Modalin" id="custId" data-toggle="modal"><button class="btn btn-primary btn-anim"><i class="fa fa-pencil-square-o"></i><span class="btn-text">Tambah</span></button></a>
								</div>
								<?php } ?>
								<div class="clearfix"></div>
							</div>							
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" data-page-length='5' >
												<?php 
												$data['hasil']= $hasil;
												$this->load->view($tabel, $data);
												?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->			
								
			</div>	

				<!-- MODAL -->				    

				<div class="modal fade" id="myModal" role="dialog">
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                    <h4 class="modal-title">Detail <?php echo "$jdl"; ?></h4>
			                </div>
			                <div class="modal-body">
			                    <div class="fetched-data"></div>
			                </div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
			                </div>
			            </div>
			        </div>
			    </div>

			    <div class="modal fade" id="Modalin" role="dialog">
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                    <h4 class="modal-title">Tambah <?php echo "$jdl"; ?></h4>
			                </div>
			                <div class="modal-body">
			                    <div class="fetched-data"></div>
			                </div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
			                </div>
			            </div>
			        </div>
			    </div>
				<!-- MODAL -->
			
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

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->	
    <script src="<?php echo base_url('template');?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>   

    <script type="text/javascript">
	    $(document).ready(function(){
	        $('#myModal').on('show.bs.modal', function (e) {
	            var rowid = $(e.relatedTarget).data('id');	            
	            $.ajax({
	                //type : 'get',
	                //url : 'edt/'+rowid,
	                //url : '<?php echo base_url($edit)?>'+rowid,
	                //data :  'nim='+ rowid,

	                type : 'POST',
	                //url : 'edt/'+rowid,
	                url : '<?php echo base_url($edit)?>',
	                data :  'data='+ rowid,
	                success : function(data){
	                $('.fetched-data').html(data);
	                }
	            });
	         });
	    });
	</script>

	<script type="text/javascript">
	    $(document).ready(function(){
	        $('#Modalin').on('show.bs.modal', function (e) {
	            $.ajax({
	                //type : 'get',
	                //url : 'edt/'+rowid,
	                url : '<?php echo base_url($input)?>',
	                //data :  'nim='+ rowid,
	                success : function(data){
	                $('.fetched-data').html(data);
	                }
	            });
	         });
	    });
	</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('template');?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->	
	<script src="<?php echo base_url('template');?>/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

	<script src="<?php echo base_url('template');?>/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>	
	<script src="<?php echo base_url('template');?>/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>	
	<script src="<?php echo base_url('template');?>/vendors/bower_components/jszip/dist/jszip.min.js"></script>	
	<script src="<?php echo base_url('template');?>/vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>	
	<script src="<?php echo base_url('template');?>/vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>	
	<script src="<?php echo base_url('template');?>/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>	
	<script src="<?php echo base_url('template');?>/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>	
	<script src="<?php echo base_url('template');?>/dist/js/dataTables-data.js"></script>

	
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url('template');?>/dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="<?php echo base_url('template');?>/vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo base_url('template');?>/dist/js/dropdown-bootstrap-extended.js"></script>
	

	<!-- Sweet-Alert  -->
	<script src="<?php echo base_url('template');?>/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url('template');?>/dist/js/sweetalert-data.js"></script>

	<script>
	  function deletedata(id)
	  {
	    swal({
	      title: "Anda Yakin?",
	      text: "Data "+id +" Akan Dihapus Secara Permanen!",
	      type: "warning",
	      showCancelButton: true,
	      // confirmButtonColor: "#DD6B55",
	      confirmButtonText: "Yes, delete it!",
	      closeOnConfirm: false
	    },
	    function(){
	      $.ajax({
	          //url: "<?php echo base_url($del) ?>"+id,	
	          		type : 'POST',
	                //url : 'edt/'+rowid,
	                url : '<?php echo base_url($del)?>',
	                data :  'data='+ id,          
	          success:function(){
	            swal('Data Berhasil Di Hapus', ' ', 'success');	            	            
	            $(document).ajaxStop(function(){
				  setTimeout("window.location = '<?php echo base_url($base) ?>'",1000);
				});      
	          },	          
	          error:function(){
	            swal('Data gagal di hapus', 'error');
	          }
	      });
	    });
	  }
	</script>
	

	<!-- Init JavaScript -->
	<script src="<?php echo base_url('template');?>/dist/js/init.js"></script>

	<script src="<?php echo base_url('template');?>/dist/js/footable-data.js"></script>