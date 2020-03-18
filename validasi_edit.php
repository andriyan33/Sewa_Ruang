<?php
include 'MySQL.php';
$mysql = new MySQL();
$mysql->connect();

$id = $_POST['id'];

$ruangan = isset($_POST['ruang']) ? $_POST['ruang'] : " ";
$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : " ";
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : " ";
$jumlah  = isset($_POST['jumlah']) ? $_POST['jumlah'] : " ";
$alasan	 = isset($_POST['alasan']) ? $_POST['alasan'] : " ";

//$mysql->execute("UPDATE peminjaman SET ruangan = '$_POST['ruang']', jurusan = '$_POST['jurusan']', waktu_peminjaman = '$_POST['tanggal']', jumlah = '$_POST['jumlah']', alasan = '$_POST['alasan']' WHERE id_peminjaman = $id");

$mysql->execute("UPDATE peminjaman set ruangan ='$ruangan', jurusan='$jurusan', tanggal_peminjaman = '$tanggal', jumlah='$jumlah', alasan='$alasan' where id_peminjaman = '$id' ");

$mysql->close_connection(); header('location: menu_user.php');
    
?>