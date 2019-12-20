<?php
class Form_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function auth_check($data)
    {
        $query = $this->db->get_where('admin', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function insert_admin($data)
    {
 
        $insert = $this->db->insert('admin', $data);
        if ($insert) {
           return $this->db->insert_id();
        } else {
            return false;
        }
    }
}