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

	public function dataTransaksi($id_lap,$tgl_booking)
	{
		$query = "SELECT jam,status,nama_team FROM transaksi WHERE id_lapangan='$id_lap' AND tgl_booking='$tgl_booking'";
		$data = $this->db->query($query);
		
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			// do nothing
		}
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
		$jamint = intval($jam);
		if ($jamint >= 7) {
			$harga = 'pagi';
			if ($jamint >= 12) {
			$harga >= 'siang';
		}
		else {
			$harga = 'malam';
		}	
		}
		
		print_r($harga);
		die();

		$queryharga = "SELECT $harga FROM lapangan";
		$harga = $this->db->query($queryharga);

		$data['id_futsal'] = $id_futsal;
		$data['id_lapangan'] = $id_lap;
		$data['id_member'] = $idmember;
		$data['jam'] =$jam;
		$data['harga'] = $harga;
		$data['nama_team'] = $team;

		$result = $this->db->insert('transaksi',$data);

	}

}

?>