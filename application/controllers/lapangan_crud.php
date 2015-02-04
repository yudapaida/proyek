<?php
	/**
	* 
	*/
	class Lapangan_crud extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
		}

		public function insert_lap()
		{
			$this->load->model('crud_lapangan','crudlap');
			$this->crudlap->insert_lap();
			redirect('page_ctr/operator');
		}
	}
?>