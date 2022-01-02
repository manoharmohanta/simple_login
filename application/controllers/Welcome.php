<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index(){
		$this->load->view('login/login');
	}

	public function register(){
		$this->load->view('login/register');
	}

	public function forgot(){
		$this->load->view('login/forgot');
	}
}
