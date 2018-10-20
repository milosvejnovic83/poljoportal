<?php
class kprofile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library(array('session', 'pagination'));
		$this->load->database();
		$this->load->model(array('user_model', 'pagination_model'));
	}
	function index()
	{
		if(! $this->session->userdata('uname')) header('location: admin/index');
	}
	function user($id)
	{
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$user = $this->user_model->get_user_by_id($id);
		$data['uname'] = $user[0]->fname . " " . $user[0]->lname;
		$data['uemail'] = $user[0]->email;
		$data['kid'] = $user[0]->id;
		$config['base_url'] = site_url('kprofile/user/'.$id);
		$this->db->select('*')->from('post')->where('userid', $id); 
		$q = $this->db->get(); 
		$number = $q->num_rows();
        $config['total_rows'] = $number;
        $config['per_page'] = "10";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(3) : 0;
        $data['postlist'] = $this->pagination_model->get_user_post_list($config["per_page"], $data['page'], $id);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('kprofile_view',$data);
	}
}?>