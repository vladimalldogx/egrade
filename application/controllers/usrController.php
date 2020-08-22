<?php
class usrController extends CI_Controller{
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');	
		}
		$this->load->model('usrModel','Grace');
    }
    public function index(){
        $this ->load->view('updateView');
    }
}

?>