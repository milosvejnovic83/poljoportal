<?php
class admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html','security'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('admin_model');
	}
    public function index()
    {
		$email = $this->input->post('email');
		$password = $this->input->post('password');	on->set_rules('email', 'Email-ID', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('admin_view');
		}
		else
		{
			$uresult = $this->admin_model->get_admin($email, $password);
			if (count($uresult) > 0)
			{
				$sess_data = array('admin' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
				$this->session->set_userdata($sess_data);
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Uspesno ste se ulogovali!</div>');
				redirect("ahome/index");
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Pogresan Email ID ili lozinka!</div>');
				redirect('admin/index');
			}
		}
    }
}?>