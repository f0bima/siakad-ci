<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="<?php echo @$dash ?>" href="<?php echo base_url("")?>"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">SIAKAD</span></div><div class="pull-right"></div><div class="clearfix"></div></a>				
				</li>
				<li>
					<a class="<?php echo @$mhs ?>" href="<?php echo base_url("Mhs")?>"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Mahasiswa</span></div><div class="pull-right"></div><div class="clearfix"></div></a>				
				</li>
				<li>
					<a class="<?php echo @$dsn ?>" href="<?php echo base_url("Dsn")?>"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Dosen</span></div><div class="pull-right"></div><div class="clearfix"></div></a>					
				</li>
				<li>
					<a class="<?php echo @$mk ?>" href="<?php echo base_url("Mk")?>"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">Matkul</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Logout</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="<?php echo base_url("dashboard/logout") ?>" ><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Logout</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>				

			</ul>
		</div>
		<!-- /Left Sidebar Menu -->