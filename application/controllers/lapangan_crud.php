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
			redirect('lapangan_crud/view_lap');
		}	

		public function view_lap()
		{
			$this->load->model('crud_lapangan','crudlap');
			$data = $this->crudlap->view_lap();
			$data['data']=$data;


			$this->load->view('header');
			$this->load->view('view_lapangan',$data);
			$this->load->view('footer');
		}
		public function tambah_lap()
		{
			$this->load->view('header');
			$this->load->view('tambah_lapangan');
			$this->load->view('footer');
		}

		public function lihat()
		{

		}

		public function hapus()
		{
			$id_lap=$_GET['no'];
			$this->load->model('crud_lapangan','crudlap');
			$this->crudlap->delete_lap($id_lap);
		
			redirect('lapangan_crud/view_lap');
		}

	}
?>