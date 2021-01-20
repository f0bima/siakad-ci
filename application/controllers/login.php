<?php 
class Login extends CI_Controller{
	
	public function index(){		
		if ($this->session->log_stat == True) {
			redirect('');
		}
		else{
			$data['page'] = 'form_login';
			$this->load->view('authantication', $data);
		}
	}	
	public function proses(){
		if ($this->session->log_stat == True) {
			redirect('');
		}
		else{
			@$email = $this->input->post('email');
			@$password = md5($this->input->post('password'));

			$where = array(
				'email' => $email,
				'pass' => $password
				);

			$cek = $this->crud->ceklogin('users',$where);

			if ($cek->num_rows() > 0) {
				$this->session->log_stat = True;
				if ($cek->row()->role == 1) {
					$role = "Admin";
				}
				else {
					$role = "Member";
				}
				$this->session->role = $role;
				$this->session->username = $cek->row()->fullname;
				redirect('');				
			}
			else {
				$data['page'] = 'form_login';
				$data['error'] = 'Password/Email Salah';
				$this->load->view('authantication', $data);
			}

			// if (isset($result)) {
			// 	if ($result->email == $email && $result->pass == $password) {
			// 		$this->session->log_stat = True;
			// 		$this->session->role = True;
			// 		$this->session->username = $result->fullname;
			// 		redirect('');
			// 	}
			// 	else{				
			// 		$data['page'] = 'form_login';
			// 		$data['error'] = 'Password Salah';
			// 		$this->load->view('authantication', $data);
			// 	}
			// }
			// else{
			// 	$data['page'] = 'form_login';
			// 	$data['error'] = 'User Tidak Ditemukan';
			// 	$this->load->view('authantication', $data);
			// }
		}
	}
		
}
?>