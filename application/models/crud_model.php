<?<?php
	/**
	* 
	*/
	class Crud_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();

		}

		public function user_insert(){

		$query ="SELECT max(id_user)+1 as id from user";
		$foreign = $this->db->query($query);
		foreach ($foreign->result() as $key) {
			$coba = $key->id;
		}

		//insert data user
		$password =$_POST['password'];
		$data_user['username']=$_POST['username'];
		$data_user['password'] = md5($password);
		$data_user['role'] = 'user';
		$insert_user = $this->db->insert('user', $data_user);

		//insert data member
		$data['first_name']=$_POST['first_name'];
		$data['last_name']=$_POST['last_name'];
		$data['id_card']=$_POST['id_card'];
		$data['ttl']=$_POST['ttl'];
		$data['team_name']=$_POST['team_name'];
		$data['address']=$_POST['address'];
		$data['phone']=$_POST['phone'];
		$data['id_user']= $coba;

		$result = $this->db->insert('member', $data);
		
		
		return $insert_user && $result;
		}

		public function operator_insert($filename)
		{
			$query ="SELECT max(id_user)+1 as id from user";
			$foreign = $this->db->query($query);
			foreach ($foreign->result() as $key) {
				$coba = $key->id;
			}

			//insert data user
			$password =$_POST['password'];
			$data_user['username']=$_POST['username'];
			$data_user['password'] = md5($password);
			$data_user['role'] = 'operator';
			$insert_user = $this->db->insert('user', $data_user);

			//insert data member
			$data['nama_futsal']=$_POST['nama_futsal'];
			$data['alamat']=$_POST['alamat'];
			$data['deskripsi']=$_POST['deskripsi'];
			$data['gambar']=$filename;
			$data['id_user']= $coba;

			$result = $this->db->insert('operator', $data);
		
			
			
			return $insert_user && $result;	
		}
	}