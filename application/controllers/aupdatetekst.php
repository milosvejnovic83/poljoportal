<?php
class aupdatetekst extends CI_Controller
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
		if(! $this->session->userdata('uname')) header('location: admin/index');
		$data['id'] = $id;
		$data['text'] = $this->admin_model->get_text_by_id($id);
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('text', 'Text', 'trim|required|min_length[3]|max_length[500]|xss_clean');
		if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('aupdatetekst_view', $data);
        }
        else
        {
			$id = $this->input->post('id');
            $data = array(
            $title = $this->input->post('title'),
			$text = $this->input->post('text'),
            );
			$sql = "update text set title='".$title."', text='".$text."' where id='".$id."'";
			$this->db->query($sql);
			$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Tekst je uspesno izmenjen!</div>');
			redirect('aupdatetekst/index/' . $id);
		}	
	}
}?>