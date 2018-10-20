<?php
class updatepost extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','security'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('admin_model');
	}
	function index($id)
	{
		if(! $this->session->userdata('uname')) header('location: login/index');	
		$data['id'] = $id;
		$data['post'] = $this->admin_model->get_post_by_id($id);
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('location', 'Location', 'trim|required|min_length[2]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('number', 'Number', 'trim|required|numeric|min_length[5]|max_length[15]|xss_clean');
		$this->form_validation->set_rules('text', 'Text', 'trim|required|min_length[3]|max_length[500]|xss_clean');		
		if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('updatepost_view', $data);
        }
        else
        {
			$id = $this->input->post('id');
            $data = array(
            $title = $this->input->post('title'),
			$location = $this->input->post('location'),
			$number = $this->input->post('number'),
			$text = $this->input->post('text'),
            );
			$sql = "update post set title='".$title."', location='".$location."', number='".$number."', text='".$text."' where id='".$id."'";
			$this->db->query($sql);
			$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">TPost is Successfully Updated!</div>');
			redirect('updatepost/index/' . $id);
		}	
	}
}?>