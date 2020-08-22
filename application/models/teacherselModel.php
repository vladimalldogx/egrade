<?php

class teacherselModel extends CI_Controller{
    public function __construct(){
        $this->load->database();
    }
    function fetchUserbyTeacher(){
        $this->db->where('usrtype' = 'TEACHER');
        $this->db->order_by("LastName","usrtype", "ASC" );
        $query = $this->db->get('users');
    }
}


?>