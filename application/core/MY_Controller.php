<?php
class MY_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function is_logged_in($data){
        $session = $this->session->userdata();
        if($session['isloggedin']['username'] == ''){
            return isset($session);
        }else{
            return FALSE;}
    }
}