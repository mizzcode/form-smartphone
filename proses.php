<?php

require_once __DIR__ . "/config/Database.php";

$db = new Database();
$db->getConnection();

if (isset($_POST['save'])) {

    $kode = $_POST['kode'];
    $seri_hp = $_POST['seri_hp'];
    $merk_hp = $_POST['merk_hp'];
    $ukuran_layar = $_POST['ukuran_layar'];
    $kamera_depan = $_POST['kamera_depan'];
    $kamera_belakang = $_POST['kamera_belakang'];
    $tanggal_launching = $_POST['tanggal_launching'];

    $sql = "INSERT INTO tugas (?,?,?,?,?,?,?) VALUES (?,?,?,?,?,?,?)";

    $statement = $db->connection->prepare($sql);

    $statement->execute([$kode, $seri_hp, $merk_hp, $ukuran_layar, $kamera_depan, $kamera_belakang, $tanggal_launching]);
}
