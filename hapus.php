<?php
include 'MySQL.php';
$mysql = new MySQL();
$mysql->connect();

 $id= $_GET['id'];

$mysql->execute("DELETE FROM peminjaman WHERE id_peminjaman = '$id' ");

$mysql->close_connection(); header('location: menu_user.php');

?>