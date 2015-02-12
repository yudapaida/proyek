<?php
	
	class Transaksi_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function view_transaksi()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT transaksi.id_transaksi, member.first_name as 'first' , member.last_name as 'last', operator.nama_futsal as 'futsal', lapangan.nama_lap as 'lapangan', transaksi.jam as 'jam' ,transaksi.harga as 'harga' FROM member,operator,lapangan,transaksi,user WHERE user.id_user=member.id_user AND member.id_member=transaksi.id_member AND operator.id_futsal=transaksi.id_futsal AND transaksi.id_lapangan=lapangan.id_lap AND username='$username' order by id_transaksi";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function konfirmasi($id_transaksi)
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT transaksi.id_transaksi, member.first_name as 'first' , member.last_name as 'last', operator.nama_futsal as 'futsal', lapangan.nama_lap as 'lapangan', transaksi.jam as 'jam' ,transaksi.harga as 'harga' FROM member,operator,lapangan,transaksi,user WHERE user.id_user=member.id_user AND member.id_member=transaksi.id_member AND operator.id_futsal=transaksi.id_futsal AND transaksi.id_lapangan=lapangan.id_lap AND transaksi.id_transaksi=$id_transaksi AND username='$username' order by id_transaksi";
			$data = $this->db->query($query);
			return $data->result_array();
		}
	}
?>