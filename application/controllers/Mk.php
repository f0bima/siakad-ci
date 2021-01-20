<?php 
class MK extends CI_Controller{	
	public function index(){
		if ($this->session->log_stat == True) {			
			$data['hasil'] = $this->crud->tampil('matkul')->result();
			$data['page'] = 'Show';			
			$data['edit'] = 'Mk/edt/';
			$data['del'] = 'Mk/del/';
			$data['base'] = 'Mk/';
			$data['jdl'] = 'Data Mata Kuliah';
			$data['tabel'] = 'mk/show';
			$data['input'] = 'mk/input';
			$data['mk'] = 'active';			
			$this->load->view('dashboard',$data);
		}
		else{
			redirect('login');
		}
	}	
	public function input(){		
		if ($this->session->log_stat == True) {				
		$this->load->view('mk/input');		
		}
		else{
			redirect('login');
		}
	}	
	public function add(){
		if ($this->session->log_stat == True) {				
		@$data = array(
				'kodemk' => preg_replace('/[^a-zA-Z0-9]/', '',$this->input->post('kodemk')),
				'matkul' => htmlspecialchars($this->input->post('matkul'), ENT_QUOTES),	
				'sks' => $this->input->post('sks'),	
				'smt' => $this->input->post('smt')		
				);
		@$masuk = $this->crud->tambah('matkul',$data);
		if ($masuk) {
			redirect('Mk/msg/0');
		}
		else{
			redirect('Mk/msg/1');
		}
		}
		else{
			redirect('login');
		}		
	}	
	public function del(){	
	if ($this->session->log_stat == True) {					
		@$kodemk = $this->input->post('data');
		@$where = array('kodemk' => $kodemk);
		@$hapus = $this->crud->delete($where,'matkul');
		if ($hapus) {
			redirect('Mk/msg/2');
		}		
		else{
			redirect('Mk/msg/3');
		}
		}
		else{
			redirect('login');
		}
	}	
	public function edt(){
		if ($this->session->log_stat == True) {				
		@$kodemk = preg_replace('/[^a-zA-Z0-9]/', '',$this->input->post('data'));		
		@$where = array('kodemk' => $kodemk);
		@$data['mk'] = $this->crud->edit($where,'matkul')->row();
		$this->load->view('mk/edit', $data);		
		}
		else{
			redirect('login');
		}
	}	

	public function upd(){				
		if ($this->session->log_stat == True) {				
		@$data = array(
				'kodemk' => preg_replace('/[^a-zA-Z0-9]/', '',$this->input->post('kodemk')),
				'matkul' => htmlspecialchars($this->input->post('matkul'),ENT_QUOTES),	
				'smt' => $this->input->post('smt'),
				'sks' => $this->input->post('sks')		
				);
		@$where = array(
				'kodemk' => $this->input->post('kodemk')
				);
		@$update = $this->crud->update($where,$data,'matkul');
		if ($update){
			redirect('Mk/msg/4');
		}
		else {
			redirect('Mk/msg/5');
		}
		}
		else{
			redirect('login');
		}
	}
	public function msg($a)	{	
		if ($this->session->log_stat == True) {		
		$data['hasil'] = $this->crud->tampil('matkul')->result();
		$data['page'] = 'Show';			
		$data['edit'] = 'Mk/edt/';
		$data['del'] = 'Mk/del/';
		$data['base'] = 'Mk/';
		$data['jdl'] = 'Data Mata Kuliah';
		$data['tabel'] = 'mk/show';
		$data['input'] = 'mk/input';
		$data['mk'] = 'active';			
		$data['msg'] = $a;		
		$this->load->view('dashboard',$data);		
		}
		else{
			redirect('login');
		}
	}
	public function cek($id){
		@$where = array('kodemk' => $id);
		@$data['mk'] = $this->crud->edit($where,'matkul')->row();
		$this->load->view('queryview',$data);		
	}
}
?>