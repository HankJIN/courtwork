<?php
class Account_m extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function gets()
    {
        return $this->db->query("SELECT * FROM courtwork_user")->result();
    }

    function get_by_email($email)
    {
        $this->db->where('email', $email);
        $result = $this->db->get('courtwork_user');
        if( $result->num_rows() == 0 ){         // email이 존재하지 않을 때
            return FALSE;
        }else{
            return $result->row();
        }

    }

    function add($option)
    {
        $this->db->set('email', $option['email']);
        $this->db->set('password', $option['password']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('courtwork_user');
        $result = $this->db->insert_id();
        return $result;
    }
}