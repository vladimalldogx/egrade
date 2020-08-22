<?php
class usrModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    function check_user($password) {
		$this->db->select('*'); //select all
		$this->db->from('users'); // table name
		$this->db->where('password', $password); // and password is equal to  $password (md5 format)
		$query = $this->db->get(); //get data from DB
		return $query;
	}
    function updateUser($password) {
        $data = array (
            'password' => $this->input->post('password')
        );
        $this->db->where('password', $id);
        $this->db->update('users', $data);
    }
}    
?>