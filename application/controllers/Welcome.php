<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{		
		$data['judul'] = "Halaman Utama";
		$this->load->view('header',$data);
		$this->load->view('welcome_message');
		$this->load->view('footer',$data);
	}
	public function login(){
		$data['judul'] = "Halman Login";
		$this->load->view('header',$data);
		$this->load->view('login');
		$this->load->view('footer',$data);
	}
	public function login_validasi(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('mymodel');
			if ($this->mymodel->login($username, $password)) {
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				echo "<script>alert('Login berhasil');window.location='dashboard'</script>";		

			}
			else{
				$this->session->set_flashdata('error','user dan password salah');
				echo "<script>alert('User dan password salah.!!');window.location='login'</script>";
			}
		}
		else{
			$this->login();
		}
	}
	public function dashboard(){
		$data = $this->mymodel->TampilJadwalSertifikas();			
		$this->load->view('admin/jadwal',array('data' => $data ));	

		$data = $this->mymodel->TampilSertifikas();
		$this->load->view('admin/daftarsertifikasi',array('data' => $data));

		$data = $this->mymodel->TampilDetailSertifikas();
		$this->load->view('admin/tampilpengumuman',array('data' => $data));
		$this->load->view('admin/dashboard');
		
	}
	public function jadwal(){
		$data = $this->mymodel->TampilJadwalSertifikas();		
		$this->load->view('admin/jadwal',array('data' => $data ));

	}
	public function inputpengumuman(){
		$this->load->view('admin/inputpengumuman');
		
	}
	public function daftarsertifikasi(){
		
		$data = $this->mymodel->TampilSertifikas();
		$this->load->view('admin/daftarsertifikasi',array('data' => $data));
		
	}
	public function tampilpengumuman(){
		
		$data = $this->mymodel->TampilDetailSertifikas();
		$this->load->view('admin/tampilpengumuman',array('data' => $data));
		
	}
	public function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url('login'));
	}
	public function pengumuman(){
		$data = $this->mymodel->TampilJadwalSertifikas();
		$this->load->view('pengumuman',array('data' => $data));
		$data['judul'] = "Halaman Pengumuman";
		$this->load->view('header',$data);
		$this->load->view('footer',$data);
	}
	public function do_pengumuman(){
		$sertifikasi = $_POST['sertifikasi'];
		$tglm = $_POST['tglm'];
		$tgls = $_POST['tgls'];
		$dosen = $_POST['dosen'];
		$waktu = $_POST['waktu'];		
		$data_insert =  array(
			'namaSertifikasi' => $sertifikasi,
			'tglMulai' => $tglm,
			'tglSelesai' => $tgls,
			'dosen' => $dosen,
			'jam' => $waktu
		); 
		$res = $this->mymodel->InsertPengumuman('sertifikasi',$data_insert);
		if ($res>=1) {
			echo "<script>alert('Berhasil Menyimpan');window.location='jadwal'</script>";
			
		}
		else{
			echo "<script>alert('Gagal Daftar');window.location='inputpengumuman'</script>";

		} 
	}
	public function kontak(){
		$data['judul'] = "Halaman Kontak";
		$this->load->view('header',$data);
		$this->load->view('kontak');
		$this->load->view('footer',$data);
	}
	public function profil(){
		$data['judul'] = "Halaman Profil";
		$this->load->view('header',$data);
		$this->load->view('profil');
		$this->load->view('footer',$data);
	}
	public function daftar(){
		$data['judul'] = "Halaman Daftar";
		$this->load->view('header',$data);
		$this->load->view('daftar');
		$this->load->view('footer',$data);
	}
	public function do_daftar(){	
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$prodi = $_POST['prodi'];
		$sertifikasi = $_POST['sertifikasi'];
		$waktu = $_POST['tgl'];
		$nohp = $_POST['nohp'];
		
		$data_insert =  array(
			'nim_mhs' => $nim,
			'nama_mhs' => $nama,
			'prodi' => $prodi,
			'sertifikasi' => $sertifikasi,
			'tgl_lahir' => $waktu,
			'nohp' => $nohp			 
		);

		$res = $this->mymodel->InsertDaftar('datarsertifikasi',$data_insert);
		if ($res>=1) {
			echo "<script>alert('Berhasil Daftar');window.location='index'</script>";
			
		}
		else{
			echo "<script>alert('Gagal Daftar');window.location='daftar'</script>";

		}

	}

}
