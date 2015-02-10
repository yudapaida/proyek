<?php
	class Transaksi_ctr extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function pesan()
		{
			$this->load->view('header');
			$this->load->view('transaksi');
			$this->load->view('footer');
		}
	}
?>