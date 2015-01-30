<?php
	class Operator_crud extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			//$this->load->helper(array('url', 'form'));
		}

		public function do_upload()
		{
			$config['upload_path'] = "futsal/assets/themes/images/carousel/";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1024';
			$config['max_width']  = '1900';
			$config['max_height']  = '1200';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
			$this->load->view('operator_registration');
			}
			else
			{
			redirect(base_url());
			}

			$this->load->model('Crud_model','crud',TRUE);
			$this->crud->operator_insert();
			redirect(base_url());
		}
	}
?>