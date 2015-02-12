<?php
	class Transaksi_ctr extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('transaksi_model','transaksi');
			if(!$this->session->userdata('akun'))
			{
				redirect('page_ctr/login_page');
			}
		}

		public function konfirmasi(){
		$id_transaksi = $_GET['no'];
		$data = $this->transaksi->konfirmasi($id_transaksi);
		$data['data'] =$data;
		$this->load->view('header');
		$this->load->view('konfirmasi_page',$data);
		$this->load->view('footer');
		}

		public function view_transaksi()
		{
			$data = $this->transaksi->view_transaksi();
			$data['data']=$data;

			$this->load->view('header');
			$this->load->view('transaksi_page',$data);
			$this->load->view('footer');
		}
	}
?>