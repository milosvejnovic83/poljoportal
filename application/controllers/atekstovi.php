<?php
class atekstovi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html', 'form'));
		$this->load->library(array('session', 'form_validation', 'pagination'));
		$this->load->database();
		$this->load->model('pagination_model');	
	}
	function index()
	{
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$config['base_url'] = site_url('atekstovi/index');
        $config['total_rows'] = $this->db->count_all('text');
        $config['per_page'] = "3";
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
        $data['textlist'] = $this->pagination_model->get_text_list($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('atekstovi_view',$data);
	}
	function deleteText($id) {
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$this->db->where('id', $id);
        $this->db->delete('text');
        redirect('atekstovi/index');
    }
}?>


