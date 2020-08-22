<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacherController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}

	function index() {
		if($this->session->userdata('usrtype')==='TEACHER') {
			$this->load->view('teacherView');
		} else {
			echo "Access Denied!";
		}
	}

}