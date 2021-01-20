<?php 
//HARUS ADA _helper.php
function hello(){
	$a =& get_instance();
	$a->load->helper('string');
	echo "HELLO";
	echo repeater("HELLO",2);
}
?>