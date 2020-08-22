<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}

	function index() {
		if($this->session->userdata('usrtype')==='STUDENT') {
			$this->load->view('studentView');
		} else {
			echo "Login-Failed";
		}
	}
}