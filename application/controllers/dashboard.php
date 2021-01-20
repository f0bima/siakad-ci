<?php 
class Dashboard extends CI_Controller{	
	public function index(){
		if ($this->session->log_stat == True) {
			$data['page'] = 'home';
			$data['dash'] = 'active';			
			$queryd = $this->crud->tampil('dosen');
			$querymh = $this->crud->tampil('mhs');
			$querymk = $this->crud->tampil(' matkul');
			$data['jdsn'] = $queryd->num_rows();
			$data['jmhs'] = $querymh->num_rows();
			$data['jmk'] = $querymk->num_rows();
			$this->load->view('dashboard', $data);		
		}
		else{
			redirect('login');
		}
	}
	
	public function logout(){
		session_destroy();
		redirect('login');
	}
}
?>