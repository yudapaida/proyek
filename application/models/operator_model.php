<?php
	/**
	* 
	*/
	class Operator_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function view_konfirmasi()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT nama_member as 'nama', lokasi, lapangan, konfirmasi.jam as 'jam', konfirmasi.harga as 'harga',konfirmasi.gambar as 'gambar', konfirmasi.id_transaksi as 'id_transaksi', transaksi.status as 'status' FROM transaksi,konfirmasi,user,operator WHERE user.id_user=operator.id_user AND operator.nama_futsal=konfirmasi.lokasi AND username='$username' order by id_konfirmasi";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function konfirmasi($id_transaksi)
		{
			$query = "UPDATE transaksi SET status='booked' WHERE id_transaksi=$id_transaksi";
			$result = $this->db->query($query);
			return TRUE;
		}
	}
?>