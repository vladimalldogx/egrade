<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class regModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData($data) {
        $result = $this->db->insert('users', $data);
        return $result;       
    }
}
