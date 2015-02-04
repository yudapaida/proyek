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
	}
?>