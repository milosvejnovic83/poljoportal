<?php
class aupdatekorisnik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','security'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}	
	function index($id)
	{
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$data['id'] = $id;
		$data['user'] = $this->user_model->get_user_by_id($id);
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$sql1 = "update user set email='' where id='".$id."'";
		$this->db->query($sql1);
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
		if ($this->form_validation->run() == FALSE)
        {   
			$id = $this->input->post('id');
			$email = $this->input->post('email');
			$sql2 = "update user set email='".$email."' where id='".$id."'";
			$this->db->query($sql2);
            $this->load->view('aupdatekorisnik_view', $data);
        }
        else
        {
			$password = $this->input->post('password');
			$password = password_hash($password, PASSWORD_DEFAULT);
			$id = $this->input->post('id');
			$data = array(
            $fname = $this->input->post('fname'),
			$lname = $this->input->post('lname'),
			$email = $this->input->post('email'),
			$password = $password,
            );
			$sql = "update user set fname='".$fname."', lname='".$lname."', email='".$email."', password='".$password."' where id='".$id."'";
			$this->db->query($sql);
			$sql1 = "update post set fname='".$fname."' where userid='".$id."'";
			$this->db->query($sql1);
			$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Korisnik je uspešno izmenjen!</div>');
			redirect('aupdatekorisnik/index/' . $id);
		}	
	}
}?>