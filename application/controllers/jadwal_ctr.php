<?php 

class Jadwal_ctr extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('jadwal_model','jadwal');
		}

		public function lihat_jadwal(){
			$id_futsal = $_GET['id'];
			$lapangan=$this->jadwal->lihat_jadwal($id_futsal);
			// $data['jadwal'] = $data ;
			// print_r($data);
			// die();
			foreach ($lapangan as $item) {
				$data['lapangan'][0]="-Pilih Lapangan-";
				$data['lapangan'][$item['id_lap']] = $item['nama_lap'];
			}

			// print_r($data);
			// die();

			$this->load->view('header');
			$this->load->view('jadwal_page2',$data);
			$this->load->view('footer');				
		}

		public function pesan()
		{
			$this->jadwal->pesan();
		}

		public function lihat_lap(){
			$key = $this->input->post('key');
			// $key=1;
			$data=$this->jadwal->dataLapangan($key);
			foreach ($data as $item) {
				// print_r($item['nama_lap']);
				echo '<h3 class="title"><span>'.$item['nama_lap'].'</span></h3>';
				echo '<p> Deskripsi : '.$item['deskripsi'].'</p>';
				echo '<p> Harga : </p>';
				echo '<table>';
				echo '<tbody>';
				echo '<tr><td>- Pagi</td>';
				echo '<td>'.$item['pagi'].'</td></tr>';
				echo '<tr><td>- Siang</td>';
				echo '<td>'.$item['siang'].'</td></tr>';
				echo '<tr><td>- Malam</td>';
				echo '<td>'.$item['malam'].'</td><tr>';
				echo '</tbody';
				echo '</table>';


				//tabel jadwal
				echo '<p>';
				echo '<table class="table table-striped">';
				echo		'<thead>';
				echo 			'<tr>';
				echo					'<td>#</td>';
				echo					'<td>Jam </td>';
				echo					'<td>Status</td>';
				echo					'<td></td>';
				echo			'</tr>';
				echo		'</thead>';
				echo		'<tbody>';
				echo				'<tr>';
				echo					'<td>1</td>';
				echo					'<td name="jam">07.00</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan"><button class="btn btn-success" action="#"> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>2</td>';
				echo					'<td name="jam">08.00</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><button class="btn btn-success" action="#"> Booking </button></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>3</td>';
				echo					'<td name="jam">09.00</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><button class="btn btn-success" action="#"> Booking </button></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>4</td>';
				echo					'<td name="jam">10.00</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><button class="btn btn-success" action="#"> Booking </button></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>5</td>';
				echo					'<td name="jam">11.00</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><button class="btn btn-success" action="#" disabled> Booking </button></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>1</td>';
				echo					'<td name="jam">12.00</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><button class="btn btn-success" action="#"> Booking </button></td>';
				echo				'</tr>';
				echo		'</tbody>';
				echo	'</table>';
				echo '</p>';
			}
			// print_r($data['nama_lap']);
			// die();			
		}
	}
?>