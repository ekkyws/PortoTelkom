<!DOCTYPE html>
<?php include "config.php"; ?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- Tabel filter -->
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
      <!-- <script src="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"></script> -->
      <!-- <script src="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap.min.css"></script> -->
      <!-- javascript Tabel -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
	<style>
		.aw{
			width: 100px;
		}
	</style>

	<title>AP Lapangan</title>
</head>
<?php 
	$i = 1;
	$query = mysqli_query($conn, "SELECT * FROM tersedia");
?>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	//if($_SESSION['level']==""){
	//	header("location:login.php?pesan=gagal");
	//}
 
	?>
	<div>
		<!-- nav -->
        <nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">Teknisi</a>
    		</div>
    			<ul class="nav navbar-nav">
      				<li><a href="teknisi.php">Home</a></li>
      				<li><a href="aplapangan.php">AP Lapangan</a></li>
      				<li><a href="logout.php">Logout</a></li>
    			</ul>
  			</div>
		</nav> 
		<!-- nav close -->
	
	
	<script>
	$(document).ready(function() {
    	var table = $('#example').DataTable( {
			lengthChange: false,
        		buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
   			 } );
 			
    		table.buttons().container()
        		.appendTo( '#example_wrapper .col-sm-6:eq(0)' );
	} );
  
	</script>
	<div class="container">
		<table id="example" class="table table-striped table-bordered" style="width:100%">

			<thead>
				<tr>
					<th style="width: 40px; text-align: center;">No.</th>
					<th style="width: 100px; text-align: center;">AP Name</th>
					<th style="width: 100px; text-align: center;">Mac Address</th>
					<th style="width: 100px; text-align: center;">Serial Number</th>
					<th style="width: 100px; text-align: center;">Lokasi</th>
					<th style="width: 100px; text-align: center;">Status</th>
					<th style="width: 100px; text-align: center;">Posisi</th>
				</tr>
			<tbody>
				<?php while ($key = mysqli_fetch_array($query)){?>
				<tr>
					<td style="text-align: center;"><?php echo $i; ?></td>
					<td style="text-align: center;"><?php echo $key['ap_name']; ?></td>
					<td style="text-align: center;"><?php echo $key['mac_address']; ?></td>
					<td style="text-align: center;"><?php echo $key['serial_number']; ?></td>
					<td style="text-align: center;"><?php echo $key['lokasi']; ?></td>
					<td style="text-align: center;"><?php echo $key['status']; ?></td>
					<td style="text-align: center;">Di Lapangan</td>
				</tr>
				<?php $i++; }; ?>
			</tbody>
		</table>
	</div>
</body>
</html>
