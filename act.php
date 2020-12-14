<?php 
	include "config.php";
	if (isset($_POST['delete'])) {
		mysqli_query($conn,"DELETE FROM data WHERE id = '".$_POST['inputan']."'");
		mysqli_query($conn,"DELETE FROM konfirm WHERE id = '".$_POST['inputan']."'");
		mysqli_query($conn,"DELETE FROM tersedia WHERE id = '".$_POST['inputan']."'");
	}

	header("location: http://localhost/run/apfisik.php");
?>

