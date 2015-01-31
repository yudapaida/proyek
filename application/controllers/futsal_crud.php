<?php
	/**
	* 
	*/
	class Futsal_crud extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
		}

		public function insert_user(){
			$this->load->model('Crud_model','crud',TRUE);
			$this->crud->user_insert();
			redirect(base_url());
		}

		public function do_upload()
		{
			//memasukkan data operator dan upload gambar
		$config['upload_path'] = './assets/themes/images/carousel/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['max_width']  = '1900';
		$config['max_height']  = '1200';

		// $this->load->model('Crud_model','crud',TRUE);
		// $this->crud->operator_insert();

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload())
		{
			$this->load->view('operator_registration');
		}
		else
		{
			$data = array('unggah_data' => $this->upload->data());
			foreach ($data as $value) {
				$filename = $value['file_name'];
				$this->load->model('Crud_model','crud'.TRUE);
				$this->crud->operator_insert($filename);
			}
			//$this->load->view('berhasil');
			redirect(base_url());
		}
		}

			public function insert_operator()
		{

			
			$this->load->model('Crud_model','crud',TRUE);
			$this->do_upload();
			$this->crud->operator_insert();
			redirect(base_url());
		}

	}
?>