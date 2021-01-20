<?php 
class MHS extends CI_Controller{	
	public function index(){
		if ($this->session->log_stat == True) {				
			$data['hasil'] = $this->crud->tampil('mhs')->result();
			$data['page'] = 'Show';
			$data['tabel'] = 'mhs/show';
			$data['edit'] = 'Mhs/edt/';
			$data['base'] = 'Mhs/';
			$data['jdl'] = 'Data Mahasiswa';
			$data['del'] = 'Mhs/del/';			
			$data['input'] = 'Mhs/input';
			$data['mhs'] = 'active';			
			$this->load->view('dashboard',$data);
		}
		else{
			redirect('login');
		}
	}	
	public function input(){		
	if ($this->session->log_stat == True) {						
		$this->load->view('mhs/input');		
	}
	else{
			redirect('login');
		}
	}	
	public function add(){
		if ($this->session->log_stat == True) {						
		@$data = array(
				'nim' => preg_replace('/[^a-zA-Z0-9]/', '',$this->input->post('nim')),
				'namamhs' => htmlspecialchars($this->input->post('nama'), ENT_QUOTES),
				'tgl' => htmlspecialchars($this->input->post('tgl'), ENT_QUOTES),
				'alamat' => htmlspecialchars($this->input->post('alamat'), ENT_QUOTES),
				'jk' => htmlspecialchars($this->input->post('jk'), ENT_QUOTES)
		);

		@$masuk = $this->crud->tambah('mhs',$data);
		if ($masuk) {
			redirect('Mhs/msg/0');
		}
		else{
			redirect('Mhs/msg/1');
		}		
	}
	else{
			redirect('login');
		}
	}	
	public function del(){		
		if ($this->session->log_stat == True) {					
		@$nim = $this->input->post('data');
		@$where = array('nim' => $nim);
		@$hapus = $this->crud->delete($where,'mhs');
		if ($hapus) {
			redirect('Mhs/msg/2');
		}	
		else{
			redirect('Mhs/msg/3');
		}
		}
	else{
			redirect('login');
		}
	}	
	public function edt(){
		if ($this->session->log_stat == True) {					
		@$nim = $this->input->post('data');		
		@$where = array('nim' => $nim);
		@$data['mhs'] = $this->crud->edit($where,'mhs')->row();
		$this->load->view('mhs/edit', $data);		
		}
	else{
			redirect('login');
		}
	}	
	public function upd(){		
		if ($this->session->log_stat == True) {							
		@$data = array(
				'nim' => preg_replace('/[^a-zA-Z0-9]/', '',$this->input->post('nim')),
				'namamhs' => htmlspecialchars($this->input->post('nama'),ENT_QUOTES),
				'tgl' => htmlspecialchars($this->input->post('tgl'),ENT_QUOTES),
				'alamat' => htmlspecialchars($this->input->post('alamat'), ENT_QUOTES),
				'jk' => htmlspecialchars($this->input->post('jk'), ENT_QUOTES)
		);
		@$where = array(
				'nim' => $this->input->post('nim')
				);
		@$update = $this->crud->update($where,$data,'mhs');
		if ($update){
			redirect('Mhs/msg/4');
		}
		else {
			redirect('Mhs/msg/5');
		}
		}
	else{
			redirect('login');
		}
	}
	public function msg($a)	{
		if ($this->session->log_stat == True) {					
		$data['hasil'] = $this->crud->tampil('mhs')->result();
		$data['page'] = 'Show';
		$data['tabel'] = 'mhs/show';
		$data['edit'] = 'Mhs/edt/';
		$data['base'] = 'Mhs/';
		$data['jdl'] = 'Data Mahasiswa';
		$data['del'] = 'Mhs/del/';			
		$data['input'] = 'Mhs/input';
		$data['mhs'] = 'active';	
		$data['msg'] = $a;				
		$this->load->view('dashboard',$data);
		}
	else{
			redirect('login');
		}

	}
}
?>