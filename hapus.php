<?php 
	include "config.php";
	if (isset($_POST['delete'])) {
		mysqli_query($conn,"DELETE FROM apdown WHERE id_ap = '".$_POST['inputan']."'");
	}
	header("location: http://localhost/run/apdown.php");
?>