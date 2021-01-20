<?php 
class Mycontroller2 extends CI_Controller
{	
	public function index(){
		$dataku['nama'] ="cek";
		$dataku['tgl'] =date("d/M/Y");
		$this->load->view('hello', $dataku);
		$this->load->view('kalkulator');
	}
	/*public function hasil(){
		@$b1= $this->input->post('b1');
		@$b2= $this->input->post('b2');		
		@$hasil['tambah'] = $b1+$b2;		
		@$hasil['b1'] = $b1;
		@$hasil['b2'] = $b2;		
		$this->load->view('form_penjumlahan', $hasil);
	}*/
	public function hitung(){
		@$b1= $this->input->post('b1');
		@$b2= $this->input->post('b2');				
		/*switch (@$_POST['op']) {
			case "+":
				@$hasil['a']=$b1+$b2;
				break;			
			case "-":
				@$hasil['a']=$b1-$b2;
				break;			
			case "X":
				@$hasil['a']=$b1*$b2;
				break;			
			case "/":
				@$hasil['a']=$b1/$b2;
				break;			
		}	

		@$hasil['1']= $b1;
		@$hasil['2']= $b2;*/
		$dataku['nama'] ="cek";
		$dataku['tgl'] =date("d/M/Y");
		$this->load->view('hello', $dataku);
		$this->load->view('kalkulator', @$hasil);		
		$this->load->helper('operasi');		
		@$az= hitung(@$_POST['op'],$b1,$b2);
		echo "$az";
	}
	public function cobahelper(){				
		$this->load->helper('coba');
		hello();
	}		
	public function get($a,$b){				
		echo $a+$b;		
	}		
}
?>