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
			$lapangan = $this->jadwal->lihat_jadwal($id_futsal);
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
			//$this->load->view('datepicker');
			$this->load->view('jadwal_page2',$data);
			$this->load->view('footer');
		}

		public function pesan()
		{
			$id_lap = $_GET['id_lap'];
			$id_futsal = $_GET['id_futsal'];
			$jam = $_GET['jam'];
			$tgl= $_GET['tgl'];
			// print_r($id_futsal);
			// die();
			$this->jadwal->pesan($id_lap,$id_futsal,$jam,$tgl);
			redirect('transaksi_ctr/view_transaksi');

		}

		public function lihat_lap(){
			// Ambil post dari ajax jadwal_page2
			$tgl = $this->input->post('tgl');
			$id_lap = $this->input->post('id');
			$waktu=array("07.00","08.00","09.00","10.00","11.00","12.00","13.00","14.00","15.00","16.00","17.00","18.00","19.00","20.00","21.00","22.00");
			//$button='';
			
			// load model untuk cek jam di tabel transaksi
			// ada atau tidak 
			$transaksi = $this->jadwal->dataTransaksi($id_lap,$tgl);
			
			// print_r($tgl_booking[0]['jam']);
			// print_r($tgl_booking[1]['jam']);
			// die();


			if($transaksi==FALSE){
				//do nothing
			}else{
				for ($i=0; $i <count($transaksi) ; $i++) { 
					for ($j=0; $j <16 ; $j++) { 
						if($transaksi[$i]['jam']==$waktu[$j]){
							$button[$j]='disabled="disabled"';
							// echo $button[$j];
							// echo $j;
						}else{
							//do nothing
							$button[$j]='disabled=" "';
						}	
						print_r($button[$j]);
						// echo "     ";
					}
				}
			}
		
			// print_r($button);			
			die();

			// load model untuk ambil data lapangan
			$data=$this->jadwal->dataLapangan($id_lap);

			
			// $tgl = $this->input->post('tgl');
			// $data_tgl = $this->jadwal->dataTransaksi($tgl);
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
				echo					'<td>'.$waktu[0].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=07.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button[0].'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>2</td>';
				echo					'<td>'.$waktu[1].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=08.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button[1].'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>3</td>';
				echo					'<td>'.$waktu[2].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=09.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button[2].'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>4</td>';
				echo					'<td>'.$waktu[3].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=10.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button[3].'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>5</td>';
				echo					'<td>'.$waktu[4].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=11.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button[4].'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>6</td>';
				echo					'<td>'.$waktu[5].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=12.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>7</td>';
				echo					'<td>'.$waktu[6].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=13.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>8</td>';
				echo					'<td>'.$waktu[7].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=14.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>9</td>';
				echo					'<td>'.$waktu[8].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=15.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>10</td>';
				echo					'<td>'.$waktu[9].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=16.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>11</td>';
				echo					'<td>'.$waktu[10].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=17.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>12</td>';
				echo					'<td>'.$waktu[11].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=18.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>13</td>';
				echo					'<td>'.$waktu[12].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=19.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>14</td>';
				echo					'<td>'.$waktu[13].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=20.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>15</td>';
				echo					'<td>'.$waktu[14].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=21.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
				echo				'</tr>';
				echo				'<tr>';
				echo					'<td>16</td>';
				echo					'<td>'.$waktu[15].'</td>';
				echo					'<td>Booked by Komsi</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=22.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button.'> Booking </button></a></td>';
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