<?php
class Pages extends CI_Controller{


	public function view($page = 'home'){

		$this->load->library('session');			//Can also be loaded with autoload.php

//----- Set and retrieve session data
		if (!isset($_SESSION['language'])){
			$_SESSION['language'] = 'english';}
		$idiom = $_SESSION ['language'];

//----- Alternative to set and retrieve session data
//		if (!isset($_SESSION['language'])){
//			$this->session->set_userdata('language', 'english');}
//		$idiom = $this->session->userdata('language');

		$this->lang->load('navbar', $idiom);
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
