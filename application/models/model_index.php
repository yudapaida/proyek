<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_index extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	public function getOperator(){
		$query = $this->db->query('select * from operator WHERE status="confirmed"');
		return $query->result_array();
	}

}