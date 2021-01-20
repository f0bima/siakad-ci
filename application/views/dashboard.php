<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('head'); ?>
<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->

    <div class="wrapper theme-4-active pimary-color-red">

		<?php $this->load->view('menu'); ?>
		<?php $this->load->view('left-side'); ?>
		<?php $this->load->view('right-side'); ?>		

		<?php 
		$this->load->view($page);
		?>       

    </div>
    <!-- /#wrapper -->	    

</body>

</html>