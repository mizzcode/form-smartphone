<?php

    require_once __DIR__ . "/config/Database.php";

    use config\Database;

    if (isset($_POST['save_hp'])) {
        $db = new Database();
        $db->getConnection();

        $kode_hp = $_POST['kode_hp'];
        $seri_hp = $_POST['seri_hp'];
        $merk_hp = $_POST['merk_hp'];
        $ukuran_layar = $_POST['ukuran_layar'];
        $kamera_depan = $_POST['kamera_depan'];
        $kamera_belakang = $_POST['kamera_belakang'];
        $tanggal_launching = date("Y-m-d", strtotime($_POST['tanggal_launching']));

        $sql = "INSERT INTO tugas (kode_hp,seri_hp,merk_hp,ukuran_layar,kamera_depan,kamera_belakang,tanggal_launching) VALUES (?,?,?,?,?,?,?)";

        try {
            $statement = $db->connection->prepare($sql);
            $result = $statement->execute([$kode_hp, $seri_hp, $merk_hp, $ukuran_layar, $kamera_depan, $kamera_belakang, $tanggal_launching]);
            if ($result) {
                echo '<body>';
                echo '<html>';
                echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">';
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo "<script>Swal.fire('Berhasil Menambah HP!', '', 'success').then(() => { window.location.href = 'index.php'; });</script>";
                echo '</body>';
                echo '</html>';
            } else {
                echo '<html>';
                echo '<body>';
                echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">';
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>'; 
                echo "<script>Swal.fire('Gagal Menambah HP!', '', 'error').then(() => { window.location.href = 'index.php'; });</script>";
                echo '</body>';
                echo '</html>';
            }
        } catch (PDOException $e) {
            echo '<html>';
            echo '<body>';
            echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>'; 
            echo "<script>Swal.fire('Gagal Menambah HP!', '', 'error').then(() => { window.location.href = 'index.php'; });</script>"; 
            echo '</body>';
            echo '</html>';
        }
    }

    if (isset($_POST['delete_hp'])) {
        $db = new Database();
        $db->getConnection();

        $sql = "DELETE FROM tugas";

        if ($db->connection->exec($sql)) {
            // Jika query berhasil dijalankan
            echo '<html>';
            echo '<body>';
            echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';  
            echo "<script>Swal.fire('Berhasil Menghapus!', '', 'success').then(() => { window.location.href = 'index.php'; });</script>";
            echo '</body>';
            echo '</html>';
        } else {
            // Jika query gagal dijalankan
            echo '<html>';
            echo '<body>';
            echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';  
            echo "<script>Swal.fire('Gagal Menghapus!', '', 'error').then(() => { window.location.href = 'index.php'; });</script>";
            echo '</body>';
            echo '</html>';
        }
    }

    function getAllSmartphone()
    {
        $db = new Database();
        $db->getConnection();

        $sql = "SELECT * FROM tugas";
        $statement = $db->connection->query($sql);

        $smartphones = [];

        while ($row = $statement->fetch()) {
            $smartphone = [
                "id" => $row['id'],
                "kode_hp" => $row['kode_hp'],
                "seri_hp" => $row['seri_hp'],
                "merk_hp" => $row['merk_hp'],
                "ukuran_layar" => $row['ukuran_layar'],
                "kamera_depan" => $row['kamera_depan'],
                "kamera_belakang" => $row['kamera_belakang'],
                "tanggal_launching" => $row['tanggal_launching']
            ];
            $smartphones[] = $smartphone;
        }
        return $smartphones;
    }
