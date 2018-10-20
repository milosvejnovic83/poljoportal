<?php
class aprofile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library(array('session', 'pagination'));
		$this->load->database();
		$this->load->model(array('admin_model', 'pagination_model'));
	}
	function index()
	{
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$details = $this->admin_model->get_admin_by_id($this->session->userdata('uid'));
		$data['uname'] = $details[0]->fname . " " . $details[0]->lname;
		$data['uemail'] = $details[0]->email;
		$id = $this->session->userdata('uid');
		$config['base_url'] = site_url('aprofile/index');
		$this->db->select('*')->from('post')->where('adminid', $id); 
		$q = $this->db->get(); 
		$number = $q->num_rows();
        $config['total_rows'] = $number;
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
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
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['postlist'] = $this->pagination_model->get_admin_post_list($config["per_page"], $data['page'], $id);           
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('aprofile_view',$data);
	}
}?>