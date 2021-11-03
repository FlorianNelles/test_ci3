<?php
class Posts extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->library('session');				//
		$this->load->library('form_validation');		//Can also be loaded with autoload.php or manually in each function
		$this->load->model('post_model');			//

//----- Set and retrieve session data
		$idiom = $_SESSION ['language'];

//----- Alternative to set and retrieve session data
//		$idiom = $this->session->userdata('language');

		$this->lang->load('navbar', $idiom);
	}


	public function index(){

		$data['title'] = 'News';
		$data['posts'] = $this->post_model->get_posts();

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function read($id = NULL){

		$data['post'] = $this->post_model->get_posts($id);
		$data['title'] = 'News';

		$this->load->view('templates/header');
		$this->load->view('posts/read', $data);
		$this->load->view('templates/footer');
	}

	public function create(){

		$data['title'] = 'Create News';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'body', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		} else {
			$this->post_model->create_post();

//--------- Set flashdata
			$this->session->set_flashdata('post_created', 'News created');
//--------- Alternative to set flashdata
//			$_SESSION['post_created'] = 'News created';

			redirect('posts');
		}
	}

	public function delete($id){

		$this->post_model->delete_post($id);

//----- Set flashdata
		$this->session->set_flashdata('post_delete', 'News deleted');
//----- Alternative to set flashdata
//		$_SESSION['post_delete'] = 'News deleted';

		redirect('posts');
	}

	public function edit($id){

		$data['post'] = $this->post_model->get_posts($id);
		$data['title'] = 'Edit Post';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'body', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->post_model->update_post($id);

//--------- Set flashdata
			$this->session->set_flashdata('post_edit', 'News edited');
//--------- Alternative to set flashdata
//			$_SESSION['post_edit'] = 'News edited';

			redirect('posts');
		}
	}
}
