<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
	<?php 
		foreach ($jadwal as $item) {
	?>
	
	<h3 class="title"><span>Lapangan <?php echo $item['nama_lap'];?></span></h3>
	<table class="table table-striped">
		<thead>
				<tr>
					<td>#</td>
					<td>Jam </td>
					<td>Status</td>
					<td></td>
				</tr>
		</thead>
		<tbody>
				<tr>
					<td>1</td>
					<td>07.00</td>
					<td>Booked by Komsi</td>
					<td><button class="btn btn-success" action="#"> Booking </button></td>
				</tr>
				<tr>
					<td>2</td>
					<td>08.00</td>
					<td>Booked by Komsi</td>
					<td><button class="btn btn-success" action="#"> Booking </button></td>
				</tr>
				<tr>
					<td>3</td>
					<td>09.00</td>
					<td>Booked by Komsi</td>
					<td><button class="btn btn-success" action="#"> Booking </button></td>
				</tr>
				<tr>
					<td>4</td>
					<td>10.00</td>
					<td>Booked by Komsi</td>
					<td><button class="btn btn-success" action="#"> Booking </button></td>
				</tr>
				<tr>
					<td>5</td>
					<td>11.00</td>
					<td>Booked by Komsi</td>
					<td><button class="btn btn-success" action="#" disabled> Booking </button></td>
				</tr>
				<tr>
					<td>1</td>
					<td>12.00</td>
					<td>Booked by Komsi</td>
					<td><button class="btn btn-success" action="#"> Booking </button></td>
				</tr>

		</tbody>
	</table>
	<?php } ?>

</div>
</section>

