<?php
class anovitekst extends CI_Controller
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
		$this->form_validation->set_rules('text', 'Text', 'trim|required|min_length[3]|max_length[500]|xss_clean');
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('anovitekst_view');
        }
		else
		{
			$data = array(
				'title' => $this->input->post('title'),
				'text' => $this->input->post('text'),
				'date' => date('Y-m-d')
			);
			if ($this->admin_model->insert_text($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Uspesno ste dodali tekst!</div>');
				redirect('anovitekst/index');
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Greska, pokusajte ponovo!</div>');
				redirect('anovitekst/index');
			}
		}
	}
}?>