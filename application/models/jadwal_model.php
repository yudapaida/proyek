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

	public function dataTransaksi($tgl)
	{
		$query = "SELECT * FROM transaksi WHERE tgl_booking='$tgl";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function pesan($id_lap,$id_futsal,$jam)
	{
		
		$username = $this->session->userdata('akun');
		$querymember = "SELECT id_member,team_name FROM user,member WHERE member.id_user = user.id_user AND username='$username'";
		$member = $this->db->query($querymember);
		foreach ($member->result() as $key) {
			$idmember = $key->id_member;
			$team = $key->team_name;
		}

		// $queryfutsal = "SELECT id_futsal FROM lapangan WHERE id_lap=$id_lap";
		// $futsal = $this->db->query($queryfutsal);
		// foreach ($futsal->result() as $key) {
		// 	$idfutsal = $key->id_futsal;
		// }

		$data['id_futsal'] = $id_futsal;
		$data['id_lapangan'] = $id_lap;
		$data['id_member'] = $idmember;
		$data['jam'] =$jam;
		$data['nama_team'] = $team;

		$result = $this->db->insert('transaksi',$data);

	}

}

?>