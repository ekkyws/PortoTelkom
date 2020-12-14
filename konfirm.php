<?php 
	include "config.php";
	if (isset($_POST['yes'])) {
		mysqli_query($conn,"UPDATE konfirm SET konfirmasi = 'DI GUDANG' WHERE id = '".$_POST['inputan']."'");
		mysqli_query($conn,"DELETE FROM tersedia WHERE id = '".$_POST['inputan']."'");
	}elseif (isset($_POST['no'])) {
		mysqli_query($conn,"UPDATE konfirm SET konfirmasi = 'DI LAPANGAN' WHERE id = '".$_POST['inputan']."'");
		$query = mysqli_query($conn,"SELECT * FROM data WHERE id = '".$_POST['inputan']."'");
		$data = mysqli_fetch_array($query);
		mysqli_query($conn,"INSERT INTO `tersedia` (`ap_name`, `mac_address`, `serial_number`, `lokasi`, `status`) VALUES ('".$data['ap_name']."', '".$data['mac_address']."', '".$data['serial_number']."', '".$data['lokasi']."', '".$data['status']."');");
	};
	header("location: http://localhost/run/apchecking.php");
	// redirect ke halaman wp-admin.php
?>