<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cptpn extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Mlogin');
	}

	public function index(){
		redirect('Cptpn','refresh');
	

	}

	public function insertDataAdmin(){
		$data['title'] = "Pendaftar akun Admin";
	 	$data['action'] = 'insert';
	 	$post = $this->input->post();
	 	if ($post) {
	 		if (! empty($post['password'])) {
	 			$post['password'] = ($post['password']);
	 		} else {
	 			unset($post['password']);
	 		}
	 		unset($post['re_password'], $post['form']);
	 		$id = $this->Mlogin->Tambah($post);
	 		redirect('login','refresh');
	 	}
	 	// $this->load->view('login/header_daftar');
	 	$this->load->view('login/vdaftar');
	 }

	 public function tampilDataAdmin(){
	 	if($this->session->userdata('status') == 'login'){            
	 		$data['title'] = "Profil";
	 		$data['action'] = 'tampil';
	 		$id_admin= $this->session->userdata('id');
	 		$data['admin']= $this->Mlogin->getDataAdmin($id_admin);
			
	 		$this->load->view('Cptpn');
	 		//$this->load->view('dashboard',$data);
	 	}else{
	 		redirect('login','refresh');
	 	}

	 }

	 public function updateDataAdmin($id_admin){
	 	if($this->session->userdata('status') == 'login'){            
	 		$data['title'] = "Update Profil";
	 		$data['action'] = 'update';
	 		$data['value']=$this->Mlogin->findIdAdmin($id_admin);
	 		$update=$this->input->post();
	 		if ($update) {
	 			if (! empty($update['password'])) {
	 				$post['password'] = ($update['password']);
	 			} else {
	 				unset($update['password']);
	 			}
	 			unset($update['re_password'], $update['form']);
	 			$this->Mlogin->updateDataPenjual($id_admin,$update);
	 			redirect('cptpn/tampilDataAdmin');
	 		}
	 		$this->load->view('dashboard');
	 		//$this->load->view('vupdate_pasien', $data);
	 	}else{
	 		redirect('login','refresh');
	 	}
	 }

	
}
