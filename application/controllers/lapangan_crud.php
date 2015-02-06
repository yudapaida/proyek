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
			$this->load->model('crud_lapangan','crudlap');
			if(!$this->session->userdata('akun'))
			{
				redirect('page_ctr/login_page');
			}
		}

		public function insert_lap()
		{
			$this->crudlap->insert_lap();
			redirect('lapangan_crud/view_lap');
		}	

		public function view_lap()
		{
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
			$id_lap=$_GET['no'];
			$data["lapangan"] = $this->crudlap->get_lapangan($id_lap);

			$this->load->view('header');
			$this->load->view('update_lapangan',$data);
			$this->load->view('footer');

		}

		public function update_lap()
		{
			$id_lap=$_GET['no'];
			$result=$this->crudlap->update_lap($id_lap,$_POST['nama_lap'],$_POST['deskripsi'],
			$_POST['pagi'],$_POST['siang'],$_POST['malam']);
		
			if($result){
				redirect('lapangan_crud/view_lap');
			}
		}

		public function hapus()
		{
			$id_lap=$_GET['no'];
			$this->crudlap->delete_lap($id_lap);
		
			redirect('lapangan_crud/view_lap');
		}

	}
?>