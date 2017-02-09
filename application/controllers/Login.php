<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Mlogin');
	}

	public function index()
	{
		$this->load->view('login/vlogin');
	}

	public function ProsesLogin(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$where=array(
			'username' => $user,
			'password' => $pass 
			);

		// $cek= $this->Mlogin->getuser('where email="'.$user.'" and password="'.$pass.'"')->result_array();
		$cek= $this->Mlogin->getuser($where)->result_array();
		if ($cek) {
			$data_session = array(
				'username' => $user,
				'id' => $cek[0]['id_admin'],
			
				'status' => 'login'
				);
			$this->session->set_userdata($data_session);
			redirect('dashboard','refresh');
		}
		else{
			echo "<script>alert('email atau password salah silahkan ulangi kembali..!');</script>";
			$this->load->view('login/vlogin');
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}


}

/* End of file login.php */
/* Location: ./application/controllers/login.php */