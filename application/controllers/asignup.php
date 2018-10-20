<?php
class asignup extends CI_Controller
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
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[admin.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('asignup_view');
        }
		else
		{
			$password = $this->input->post('password');
			$password = password_hash($password, PASSWORD_DEFAULT);
			$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'password' => $password
			);
			if ($this->admin_model->insert_admin($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Uspesno je registrovan admin!</div>');
				redirect('asignup/index');
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Greska, pokusajte ponovo!</div>');
				redirect('asignup/index');
			}
		}
	}
}?>