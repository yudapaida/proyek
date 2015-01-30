<?php
	/**
	* 
	*/
	class Futsal_crud extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function insert(){
		$this->load->model('Crud_model','crud',TRUE);
		$this->crud->insert();
		redirect(base_url());
		}
	}
?>