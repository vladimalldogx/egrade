<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');	
		}
		$this->load->model('sectionModel','sModel');
	}

	  function index() {
		if($this->session->userdata('usrtype')==='ADMIN') {
			$data['result'] = $this->sModel->getAllData();
			$data['users'] = $this->sModel->getAllTeachers();
			$this->load->view('adminView', $data);
		} else {
			echo "Access Denied!";
		}
		
	  }
	public function create() {
		$lastName = $this->input->post("sec_name");
		$firstName = $this->input->post("year_lvl");
		$teachers = $this->input->post("teacchersName");
        $addby = $this->input->post("addedby");
		$data = array (
			'sec_name' => $this->input->post('lastName'),
			 'year_lvl' => $this->input->post('firstName'),
			 'teachersName' => $this ->input->post('teachers'),
			 'addedBy' => $this ->input->post('addby')
		 );
		$result = $this->sModel->createData($data);
		
		if($result){
			echo "<script> alert('one Section Added')</script>";
			$this->load->view('adminView', $data);
			
		}else{
			echo"Failed";
		}
		
	}
	public function createAssign() {
		
		$suname = $this->input->post("subName");
		$tname = $this->input->post("teacherName");
		$stuname = $this->input->post("studName");
		$sched = $this->input->post("sched");
        $addby = $this->input->post("addedBy");
		$data = array (
			
			 'subName' => $this->input->post('suname'),
			 'teacherName' => $this ->input->post('tname'),
			 'studName' => $this ->input->post('stuname'),
			 'sched' => $this ->input->post('sched'),
			 'addedBy' => $this ->input->post('addby')
		 );
		$result = $this->sModel->createAss($data);
		
		if($result){
			echo "<script> alert('one Section Added')</script>";
			$this->load->view('assignView', $data);
			
		}else{
			echo"Failed";
		}
		
	}
	public function delete(){
		$this->sModel->deleteData($id);
		redirect("Admin");
	}
	public function viewSubject() {
		$data['subject'] = $this->sModel->getAllSubject();
		$data['users'] = $this->sModel->getAllTeachers();
		$data['section'] = $this->sModel->getAllSection();
        $this->load->view('subView', $data);
	}
	public function createSub(){
        $this->sModel->createSubject();
        redirect("Admin");
	}
	public function deleteSub(){
		$this->sModel->deleteSubject($id);
		redirect("Admin");
	}
	public function viewAssign(){
		$data['sass'] = $this->sModel->getAllAss();
		$data['subject'] = $this->sModel->getAllSubject();
		$data['users'] = $this->sModel->getAllTeachers();
		$data['student'] = $this->sModel->getAllChildren();
		$this->load->view('assignView', $data);
	}
	public function getSubjects(){
		if($this->input->post('subName')){
			echo $this->sMode->getSubject($this->input->post('subName'));
		}
	}
	
}		