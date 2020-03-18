<?php
include 'MySQL.php';
$mysql = new MySQL();
$mysql->connect();
if(isset($_GET['ruang'])){
    echo $_GET['ruang'];
}
if(isset($_GET['jurusan'])){
    echo $_GET['jurusan'];
}
echo $_GET['tanggal'];
echo $_GET['jumlah'];
echo $_GET['alasan'];

$mysql->execute("INSERT INTO peminjaman (ruangan,jurusan,tanggal_peminjaman,jumlah,alasan) VALUES ('".$_POST['ruang']."','".$_POST['jurusan']."','".$_POST['tanggal']."','".$_POST['jumlah']."','".$_POST['alasan']."')");

$mysql->close_connection(); header('location: menu_user.php');
    
?>