<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	function auth() {
		$username  = $this->input->post('username',TRUE);
		$password  = $this->input->post('password',TRUE);
		$result    = $this->Login_model->check_user($username, ($password));
		if($result->num_rows() > 0) {
			$data  = $result->row_array();
			$lastname = $data['LastName'];
			$firstname = $data['FirstName'];
			$mi = $data['MI'];
			$name  = $data['username'];
			$email = $data['email'];
			$usrtype = $data['usrtype'];
			$sesdata = array(
				'LastName' => $lastname,
				'Firstname' => $firstname,
				'MI' => $mi,
				'username'  => $username,
				'email'	   => $email,
				'usrtype'   => $usrtype,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($usrtype === 'ADMIN') {
				redirect('Admin');
			} elseif($usrtype === 'TEACHER') {
				redirect('teacherController');
			} else {
				redirect('studentController');
			}
		} else {
			echo "<script>alert('access denied');history.go(-1);</script>";
		}
		$this->load->view('login_view');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('loginController');
	}
}

