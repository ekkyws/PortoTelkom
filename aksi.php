<?php 
	include "config.php";
	if (isset($_POST['delete'])) {
		mysqli_query($conn,"DELETE FROM gudang WHERE id_gudang = '".$_POST['inputan']."'");
	}
	

	header("location: http://localhost/run/apgudang.php");
?>

