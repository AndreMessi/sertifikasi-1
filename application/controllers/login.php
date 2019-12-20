<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class login extends CI_Controller {
  
     public function __construct()
      {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
        $this->id = $this->session->admin('id');
      }
  
  
    public function index()
    {
     $this->load->view('login');
    }
    public function post_login()
        {
 
       $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("admin"));
 
        }else{
            echo "Username dan password salah !";
        }
    
    }   
    public function post_register()
    {
 
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('register');
        }
        else
        {   
            $data = array(
               'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password')),
 
             );
   
            $check = $this->Form_model->insert_admin($data);
 
            if($check != false){
 
                $admin = array(
                  'id' => $check->id,
                  'username' => $check->username,
                  'password' => $check->password,
                );
             }
  
             $this->session->set_admin($admin);
 
             redirect( base_url('auth/dashboard') ); 
            }
 
         
    }
    public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('auth'));
   }    
   public function dashboard(){
       if(empty($this->id)){
        redirect(base_url('auth'));
      }
       $this->load->view('dashboard');
    }
}