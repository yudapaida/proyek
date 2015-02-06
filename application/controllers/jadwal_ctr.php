<?php 

class Jadwal_ctr extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('jadwal_model','jadwal');
		}

		public function lihat_jadwal(){
			$id_futsal = $_GET['id'];
			$data=$this->jadwal->lihat_jadwal($id_futsal);
			$data['jadwal'] = $data ;
			// print_r($data);
			// die();

			$this->load->view('header');
			$this->load->view('jadwal_page',$data);
			$this->load->view('footer');
				
		}
	}

?>