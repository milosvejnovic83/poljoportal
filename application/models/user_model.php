<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	function get_user($email, $password)
	{
		$hash = $this->db->select('password')
                  ->get_where('user', array('email' => $email))
                  ->row()
                  ->password;
		if(password_verify($password, $hash)) {		
		$password = $hash;	
		$this->db->where('email', $email);
		$this->db->where('password', $password);
        $query = $this->db->get('user');
		return $query->result();
		}
		else{}
	}
	function get_user_list()
    {
        $q = 'SELECT * FROM user';
        $query = $this->db->query($q);
        $result = $query->result();
        return $result;
    }
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	function insert_user($data)
    {	
		return $this->db->insert('user', $data);
	}
	function get_post_list_by_id($userid)
	{
		$this->db->where('userid', $userid);
        $query = $this->db->get('post');
		return $query->result();
	}
}?>