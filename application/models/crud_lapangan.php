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
			$query = "SELECT lapangan.id_lap, lapangan.nama_lap, lapangan.deskripsi, lapangan.pagi, lapangan.siang, lapangan.malam FROM user, operator, lapangan WHERE lapangan.id_futsal=operator.id_futsal AND operator.id_user = user.id_user AND username='$username' order by nama_lap";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function delete_lap($id_lap)
		{
			$query = "DELETE FROM lapangan WHERE id_lap='$id_lap'";
			$this->db->query($query);
		}

		public function get_lapangan($id_lap)
		{
			$query = "SELECT * FROM lapangan WHERE id_lap=$id_lap";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function update_lap($id_lap,$nama_lap,$deskripsi,$pagi,$siang,$malam){
		$query="UPDATE lapangan SET nama_lap='$nama_lap',
									 deskripsi='$deskripsi',
									 pagi='$pagi',
									 siang='$siang',
									 malam='$malam'
				where id_lap=$id_lap";
		$result=$this->db->query($query);
		return TRUE;
		}
	}
?>