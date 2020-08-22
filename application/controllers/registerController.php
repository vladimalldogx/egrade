<?php
 class registerController extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('regModel','jetlee');
    }
    public function index(){
        $this->load->view('regView');
    }
    public function insertData(){
        $lastname = $this->input->post("LastName");
        $FirstName = $this->input->post("FirstName");
        $mi  = $this ->input->post("MI");
        $username = $this ->input->post("username");
        $email = $this ->input->post("email");
        $password = $this ->input->post("password");
        $usrtype = $this->input->post("usrtype");
        
        $data = array (
            'LastName' => $this->input->post('lastname'),
            'FirstName' => $this->input->post('firstname'),
            'MI' => $this ->input->post('mi'),
            'username' => $this ->input->post('username'),
            'email' => $this ->input->post('email'),
            'password' => $this ->input->post('password'),
            'usrtype' => $this->input->post('usrtype')

        );
         $result = $this->jetlee->createData($data);
            if($result){
            
                echo "<script> alert('one Section Added')</script>";
        }
        else{
            echo "FAIL!";
        }
    }

 }


?>