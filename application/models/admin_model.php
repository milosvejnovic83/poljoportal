<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	function get_admin($email, $password)
	{
		$hash = $this->db->select('password')
                  ->get_where('admin', array('email' => $email))
                  ->row()
                  ->password;
		if(password_verify($password, $hash)) {		
		$password = $hash;	
		$this->db->where('email', $email);
		$this->db->where('password', $password);
        $query = $this->db->get('admin');
		return $query->result();
		}
		else{}
	}	
	function get_admin_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('admin');
		return $query->result();
	}	
	function insert_admin($data)
    {
		return $this->db->insert('admin', $data);
	}	
	function insert_post($data)
    {
		return $this->db->insert('post', $data);
	}	
	function insert_text($data)
    {
		return $this->db->insert('text', $data);
	}
	function get_admin_list()
    {
        $q = 'SELECT * FROM admin';
        $query = $this->db->query($q);
        $result = $query->result();
        return $result;
    }	
	function get_post_list()
    {
        $q = 'SELECT * FROM post';
        $query = $this->db->query($q);
        $result = $query->result();
        return $result;
    }	
	function get_post_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('post');
		return $query->result();
	}
	
	function get_post_list_by_id($adminid)
	{
		$this->db->where('adminid', $adminid);
        $query = $this->db->get('post');
		return $query->result();
	}	
	function get_text_list()
    {
        $q = 'SELECT * FROM text';
        $query = $this->db->query($q);
        $result = $query->result();
        return $result;
    }
	function get_text_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('text');
		return $query->result();
	}
}?>