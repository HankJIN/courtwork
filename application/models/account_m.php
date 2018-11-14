<?php
class account_m extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function gets()
    {
        return $this->db->query("SELECT * FROM courtwork_user")->result();
    }

    function get($option)
    {
        $result = $this->db->get_where('courtwork_user', array('email'=>$option['email']))->row();
        var_dump($this->db->last_query());
        return $result;
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