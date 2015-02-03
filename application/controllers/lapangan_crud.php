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

		public function do_upload()
		{
			//memasukkan data operator dan upload gambar
			$config['upload_path'] = './assets/themes/images/lapangan/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1024';
			$config['max_width']  = '1900';
			$config['max_height']  = '1200';
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload())
			{
			$this->load->view('operator_page');
			}
			else
			{
				$data = array('unggah_data' => $this->upload->data());
				foreach ($data as $value) {
					$filename = $value['file_name'];
					$this->load->model('crud_lapangan','crudlap');
					$this->crudlap->insert_lap($filename);
				}
				//$this->load->view('berhasil');
				redirect(base_url());
			}
		}
		public function insert_lap()
		{
			$this->load->model('crud_lapangan','crudlap');
			$this->do_upload();
			$this->crudlap->insert_lap();
			redirect('page_ctr/operator');
		}
	}
?>