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
		$data =  $this->db->query('SELECT * from datarsertifikasi');
		return $data->result_array();
	}
	public function TampilJadwalSertifikas($where=""){
		$data =  $this->db->query('SELECT * from sertifikasi'.$where);
		return $data->result_array();
	}
	public function TampilDetailSertifikas(){
		$data =  $this->db->query('SELECT a.id_mhs,a.id_sertifikasi, b.id_mhs, b.nama_mhs, b.nim_mhs, b.prodi, b.sertifikasi, c.dosen, c.tglMulai, c.tglSelesai, c.jam FROM detailsertifikasi a RIGHT JOIN datarsertifikasi b ON a.id_mhs = b.id_mhs RIGHT JOIN sertifikasi c ON c.id_sertifikasi = a.id_sertifikasi');
		return $data->result_array();
	}
	public function DeleteDataJadwal($namatabel,$where){
		$res = $this->db->delete($namatabel,$where);
		return $res;
	}
	public function EditDataJadwal($namatabel,$data,$where){
		$res = $this->db->update($namatabel,$data,$where);
		return $res;
	}
	public function login($username,$password){
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