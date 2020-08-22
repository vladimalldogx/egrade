<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sectionModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData($data) {
        $result=$this->db->insert('section',$data);
        return $result;
       
    }

    function getAllData() {
        $query = $this->db->get('section');
        return $query->result();
    }
    function getAllTeachers(){
        $this->db->where(array('usrtype'=>'TEACHER'));
        $query = $this->db->get('users');
        return $query->result();

    }

    function getData($sec_id) {
        $query = $this->db->query('SELECT * FROM section WHERE `sec_id` =' .$sec_id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'sec_name' => $this->input->post('lastName'),
            'year_lvl' => $this->input->post('firstName'),
            'teachersName' => $this->input->post('teachers'),
         
        );
        $this->db->where('sec_id', $id);
        $this->db->update('section', $data);
    }

    function deleteData($id) {
        $this->db->where('sec_id', $id);
        $this->db->delete('section');
    }
    function getAllSubject() {
        $query = $this->db->get('subject');
        return $query->result();
    }
    function createSubject() {
        $data = array (
            'subcode' => $this->input->post('scode'),
            'subName' => $this->input->post('sname'),
            'schedule' => $this ->input->post('sched'),
            'teachersName' => $this ->input->post('teachers')
        );
        $this->db->insert('subject', $data);
       
    }
    function deleteSubject($id) {
        $this->db->where('subID', $id);
        $this->db->delete('subject');
    }
    function getAllSection(){
        $this->db->select('sec_id');
        $query = $this->db->get('section');
        return $query->result();

    }
    function createAss($data) {
        $result=$this->db->insert('sass',$data);
        return $result;
       
    }
    function getAllChildren(){
        $this->db->where(array('usrtype'=>'STUDENT'));
        $query = $this->db->get('users');
        return $query->result();

    }
    function getAllAss() {
        $query = $this->db->get('sass');
        return $query->result();
    }
    function getSubject($subName){
    $this->db->where(array('subName'=>$subName));
    $query = $this->$db->get('subject');
    $output = '<option value="">Select Teacher</option>';
        foreach($query->result() as $p){
            $output .= '<option value="'.$p->teachersName.'">'.$p->teachersName.'</option>';
        }
        return $query->result($output);
    }

}
