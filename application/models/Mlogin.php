<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// public function getEmail($value_penjual);
	// 	$query = $this->db->get_where('penjual', $value_penjual);
	// 	return $query;
	// }

	public function getuser($where){
		// $query = $this->db->query('select * from penjual '.$where);
		$query = $this->db->get_where('admin',$where);
		return $query;
	}

	public function Tambah($tambah){
		$this->db->insert('admin', $tambah);
		return $this->db->insert_id();
	}

	public function getDataAdmin($where){
		$query = $this->db->query('select * from admin where id_admin = '.$where);
		if ($query->num_rows()>0) {return $query->result();} 
		else {return array();}
	}

	public function updateDataAdmin($id_admin,$data){
		$this->db->update('admin', $data, array('id_admin'=>$id_admin));
	}

	public function findIdAdmin($id_admin){
		$query=$this->db->get_where('admin', array('id_admin'=>$id_admin));
		return $query->row();
	}

}