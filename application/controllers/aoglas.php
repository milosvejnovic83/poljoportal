<?php
class aoglas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('admin_model');
	}
	function index()
	{
		if(! $this->session->userdata('uname')) header('location: admin/index');
	}	
	function post($id)
	{
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$details = $this->admin_model->get_post_by_id($id);
		$data['oname'] = $details[0]->fname;
		$data['otitle'] = $details[0]->title;
		$data['olocation'] = $details[0]->location;
		$data['onumber'] = $details[0]->number;
		$data['otext'] = $details[0]->text;
		$data['odate'] = $details[0]->date;
		$this->load->view('aoglas_view', $data);
	}
	function deletePost($id) {
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$this->db->where('id', $id);
		$this->db->delete('post');
	}
}?>