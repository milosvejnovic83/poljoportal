<?php

class pagination_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function get_user_list($limit, $start)
    {
        $sql = 'select * from user order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
	  function get_admin_list($limit, $start)
    {
        $sql = 'select * from admin order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
	}
	function get_post_list($limit, $start)
    {
        $sql = 'select * from post order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
		function get_admin_post_list($limit, $start, $id)
    {
        $sql = 'select * from post where adminid="'.$id.'" order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
	function get_user_post_list($limit, $start, $id)
    {
        $sql = 'select * from post where userid="'.$id.'" order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
	function get_text_list($limit, $start)
    {
        $sql = 'select * from text order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>