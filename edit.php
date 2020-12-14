<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Inventaris AP</title>
</head>
<body>
  <!-- <?php 
  // session_start();
 
  // // cek apakah yang mengakses halaman ini sudah login
  // if($_SESSION['level']==""){
  //   header("location:login.php?pesan=gagal");
  // }
 
  ?> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <div class="row">
      <div class="column">
	<div>
		
      <center>
      <img src="Telkom.png" alt="logo" width="150" height="100">
      <img src="logo.png" alt="logo" width="150" height="90">
      <h1>Inventaris AP 
      <br>WITEL Bandung Barat</h1>
      <hr>

        <h3>Edit Data AP</h3>
        <h3>Navigation</h3>
        <button class="addbutton" ><a href="insert.php"><b>Home</b></a></button>
        <button class="addbutton" ><a href="keluar.php"><b>Input AP Keluar</b></a></button>
        <button class="addbutton" ><a href="wp-admin.php"><b>Cek AP</b></a></button>
        <br><br>
 
      <h3>Log Out</h3>
        <p>Jika anda sudah tidak ada keperluan lagi silakan <b>Log Out</b></p>
        <button class="logout"><a href="logout.php"><b>LOG OUT</b></a></button></center>
     </div>
 </div>

    <div class="column">

      <?php
      $conn = mysqli_connect("localhost","root","","bismillah");

      $sql = mysqli_query($conn,"SELECT ap_name, mac_address, serial_number, lokasi, tanggal_masuk, tanggal_keluar, status, keterangan, kondisi FROM data WHERE mac_address = '".$_GET['mac_address']."'");
      $row = mysqli_fetch_assoc($sql);
      ?>

      <?php  
      if(isset($_POST['edit'])){
        $conn = mysqli_connect("localhost","root","","bismillah");
        mysqli_query($conn,"INSERT INTO gudang SET ap_name = '".$_POST['ap_name']."', mac_address = '".$_POST['mac_address']."', serial_number = '".$_POST['serial_number']."', lokasi = '".$_POST['lokasi']."',tanggal_masuk = '".$_POST['tanggal_masuk']."',tanggal_keluar = '".$_POST['tanggal_keluar']."',status = '".$_POST['status']."',keterangan = '".$_POST['keterangan']."',kondisi = '".$_POST['kondisi']."'");
        mysqli_query($conn,"UPDATE data SET ap_name = '".$_POST['ap_name']."',mac_address = '".$_POST['mac_address']."', serial_number = '".$_POST['serial_number']."',lokasi = '".$_POST['lokasi']."',tanggal_masuk = '".$_POST['tanggal_masuk']."',tanggal_keluar = '".$_POST['tanggal_keluar']."',status = '".$_POST['status']."', keterangan = '".$_POST['keterangan']."', kondisi = '".$_POST['kondisi']."' WHERE mac_address = '".$_GET['mac_address']."'");
          header("location: http://localhost/run/apgudang.php");}
      ?>

          <form method="POST" accept-charset="utf-8">
          
          <label for="name"><b>AP Name</b></label>
          <input type="text" placeholder="AP Name" name="ap_name" value="<?php echo $row['ap_name']; ?>" >

          <label for="name"><b>Mac Address</b></label>
          <input type="text" placeholder="Mac Address" name="mac_address" value="<?php echo $row['mac_address']; ?>" >

          <label for="name"><b>Serial Number</b></label>
          <input type="text" placeholder="Serial Number" name="serial_number"  value="<?php echo $row['serial_number']; ?>">
           
          <label for="name"><b>Lokasi</b></label>
          <input type="text" placeholder="Lokasi" name="lokasi" value="<?php echo $row['lokasi']; ?>" >
           
          <label for="tanggalpinjam" class="grup-pilihan">Tanggal Masuk</label><br/>
          <input type="date" placeholder="DD MM YYYY" name="tanggal_masuk" id="myFile"  value="<?php echo $row['tanggal_masuk']; ?>">
          
          <label for="tanggalpinjam" class="grup-pilihan">Tanggal Keluar</label><br/>
          <input type="date" placeholder="DD MM YYYY" name="tanggal_keluar" id="myFile"  value="<?php echo $row['tanggal_keluar']; ?>">

          <label for="name"><b>Status</b></label>
          <input type="text" placeholder="Status" name="status" value="<?php echo $row['status']; ?>">

          <label for="name"><b>Keterangan</b></label>
          <input type="text" placeholder="Keterangan" name="keterangan" value="<?php echo $row['keterangan']; ?>">

          <label for="name"><b>Kondisi</b></label>
          <input type="text" placeholder="Kondisi" name="kondisi" value="<?php echo $row['kondisi']; ?>">
          <div>
            <button type="submit" name="edit" class="button-look">UPDATE</button> 
          </div>
          <br>
          <br>
    </form>
    </div>
    <br>
    <br>
    <br>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
