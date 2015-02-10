<?php 

class Jadwal_model extends CI_Model
{
		
	public function __construct()
	{
		parent::__construct();
	}


	public function lihat_jadwal($id_futsal){
		$query = "SELECT * FROM lapangan WHERE id_futsal='$id_futsal' order by nama_lap";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function dataLapangan($id_lap){
		$query = "SELECT * FROM lapangan WHERE id_lap='$id_lap'";
		$data = $this->db->query($query);
		return $data->result_array();
	}

}

?>