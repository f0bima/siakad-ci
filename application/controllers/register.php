<?php 
class Register extends CI_Controller{
	
	public function index(){						
		if ($this->session->log_stat == True) {
			redirect('');
		}
		else{
			$data['page'] = 'form_register';
			$this->load->view('authantication', $data);		
		}
	}	
	public function proses(){
		if ($this->session->log_stat == True) {
			redirect('');
		}
		else{
			$user = $this->input->post('user');			
			$pass = md5($this->input->post('pass'));
			$email = $this->input->post('email');		

			if (empty($user) or empty($pass) or empty($email)) {
				redirect('register');
			}		

			@$data = array(
				'email' => $email,
				'pass' => $pass,
				'fullname' => $user,
				'role' => '0'				
			);

			@$masuk = $this->crud->tambah('users',$data);
			if ($masuk) {			
				$data['page'] = 'form_login';
				$data['error'] = 'Pendaftaran Berhasil';
				$this->load->view('authantication', $data);
			}
			else{
				$data['page'] = 'form_register';
				$data['error'] = 'User Sudah Terdaftar';
				$this->load->view('authantication', $data);		
			}
		}
	}	
		
}
?>