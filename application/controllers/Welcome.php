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
	public function pengumuman(){
		$data['judul'] = "Halaman Pengumuman";
		$this->load->view('header',$data);
		$this->load->view('pengumuman');
		$this->load->view('footer',$data);
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

}
