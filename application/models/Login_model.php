<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function check_user($username, $password) {
		$this->db->select('*'); //select all
		$this->db->from('users'); // table name
		$this->db->where('username', $username); // where username is equal to $username
		$this->db->where('password', $password); // and password is equal to  $password (md5 format)
		$query = $this->db->get(); //get data from DB
		return $query;
	}

}
