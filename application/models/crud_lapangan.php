<?php
	/**
	* 
	*/
	class Crud_lapangan extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function insert_lap($filename)
		{
			$username = $this->session->userdata('akun');

			//print_r($username);
			$query ="SELECT id_futsal as id from user,operator where operator.id_user = user.id_user AND username='$username'";
			$foreign = $this->db->query($query);
			foreach ($foreign->result() as $key) {
				$coba = $key->id;
			}

			//insert data member
			$data['nama_lap']=$_POST['nama_lap'];
			$data['deskripsi']=$_POST['deskripsi'];
			$data['pagi']=$_POST['pagi'];
			$data['siang']=$_POST['siang'];
			$data['malam']=$_POST['malam'];
			$data['id_futsal']= $coba;

			$result = $this->db->insert('lapangan', $data);
		}

		public function view_lap()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT lapangan.id_lap, lapangan.nama_lap, lapangan.deskripsi, lapangan.pagi, lapangan.siang, lapangan.malam FROM user, operator, lapangan WHERE lapangan.id_futsal=operator.id_futsal AND operator.id_user = user.id_user AND username='$username'";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function delete_lap($id_lap)
		{
			$query = "DELETE FROM lapangan WHERE id_lap='$id_lap'";
			$this->db->query($query);
		}
	}
?>