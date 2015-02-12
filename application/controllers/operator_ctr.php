<?php
	/**
	* 
	*/
	class Operator_ctr extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('operator_model');
		}

		public function view_konfirmasi()
		{
			$data = $this->operator_model->view_konfirmasi();
			$data['data']=$data;

			$this->load->view('header');
			$this->load->view('view_konfirmasi',$data);
			$this->load->view('footer');
		}

		public function konfirmasi_status()
		{
			$id_transaksi=$_GET['no'];
			$this->operator_model->konfirmasi($id_transaksi);
			redirect('operator_ctr/view_konfirmasi');
		}
	}
?>