<?php
class Pages extends CI_Controller{


	public function view($page = 'home'){

		$this->load->library('session');

		$idiom = $this->session->userdata('language');
		$this->lang->load('navbar', $idiom);

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
