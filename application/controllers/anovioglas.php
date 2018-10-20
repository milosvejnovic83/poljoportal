<?php
class anovioglas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','security'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('admin_model');
	}
	function index()
	{
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('location', 'Location', 'trim|required|min_length[2]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('number', 'Number', 'trim|required|numeric|min_length[5]|max_length[15]|xss_clean');
		$this->form_validation->set_rules('text', 'Text', 'trim|required|min_length[3]|max_length[500]|xss_clean');
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('anovioglas_view');
        }
		else
		{
			$data = array(
				'adminid' => $this->session->userdata('uid'),
				'fname' => $this->session->userdata('uname'),
				'title' => $this->input->post('title'),
				'location' => $this->input->post('location'),
				'number' => $this->input->post('number'),
				'text' => $this->input->post('text'),
				'date' => date('Y-m-d H:i:s')
			);
			if ($this->admin_model->insert_post($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Uspesno ste dodali oglas!</div>');
				redirect('anovioglas/index');
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Greska, pokusajte ponovo!!!</div>');
				redirect('anovioglas/index');
			}
		}
	}
}?>