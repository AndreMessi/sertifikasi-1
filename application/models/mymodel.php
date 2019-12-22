<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	
	public function InsertDaftar($namatabel,$data){
		$res = $this->db->insert($namatabel,$data);
		return $res;
	}

	public function InsertPengumuman($namatabel,$data){
		$res = $this->db->insert($namatabel,$data);
		return $res;
	}
	public function TampilSertifikas(){
		$data =  $this->db->query('select * from datarsertifikasi');
		return $data->result_array();
	}
	public function TampilJadwalSertifikas(){
		$data =  $this->db->query('select * from sertifikasi');
		return $data->result_array();
	}
	public function login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');

		if ($query->num_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
}