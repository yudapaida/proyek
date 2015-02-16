<?php
	class Admin_ctr extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('admin_model');
		}

		public function view_operator()
		{
			$this->load->view('header');
			$data = $this->admin_model->view_operator();
			$data['data']=$data;
			$this->load->view('admin_page',$data);
			$this->load->view('footer');
		}

		public function konfirmasi()
		{
			$id_futsal=$_GET['no'];
			$this->admin_model->konfirmasi($id_futsal);
			redirect('admin_ctr/view_operator');
		}

			public function hapus()
		{
			$id_futsal=$_GET['no'];
			$this->admin_model->delete_operator($id_futsal);
			redirect('admin_ctr/view_operator');
		}
	}
?>