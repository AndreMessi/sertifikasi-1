<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Auth extends CI_Controller {
  
     public function __construct()
      {
        parent::__construct();
        $this->load->model('Form_model');
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
 
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('login');
        }
        else
        {   
            $data = array(
               'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password')),
 
             );
   
            $check = $this->Form_model->auth_check($data);
            
            if($check != false){
 
                 $user = array(
                 'id' => $check->id,
                 'username' => $check->username,
                 'password' => $check->password,
                );
  
            $this->session->set_admin($user);
 
             redirect( base_url('dashboard') ); 
            }
 
           $this->load->view('login');
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