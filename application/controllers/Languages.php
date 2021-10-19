<?php

class Languages extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->library('session');
	}

	public function english(){
		unset($_SESSION['language']);
		$_SESSION['language'] = 'english';

		redirect($_SERVER['HTTP_REFERER']);
	}

	public function german(){
		$this->session->unset_userdata('language');
		$this->session->set_userdata('language', 'german');

		redirect($_SERVER['HTTP_REFERER']);
	}

}
