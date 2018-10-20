<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html','security'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
    public function index()
    {
		$email = $this->input->post('email');
		$password = $this->input->post('password');	
		$this->form_validation->set_rules('email', 'Email-ID', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');		
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('login_view');
		}
		else
		{
			$uresult = $this->user_model->get_user($email, $password);
			if (count($uresult) > 0)
			{
				$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
				$this->session->set_userdata($sess_data);
				redirect("home/index");
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Pogresan Email-ID ili lozinka!</div>');
				redirect('login/index');
			}
		}
    }
}?>