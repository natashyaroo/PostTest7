<?php

require 'koneksi.php';

if (isset($_GET['id_registrasi'])) {
    $id = $_GET['id_registrasi'];

    $result = mysqli_query($conn, "DELETE FROM member_baru WHERE id_registrasi = '$id'");

    if ($result) {
        echo "
            <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'dashboard.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'dashboard.php';
            </script>
        ";
    }
} else {
    echo 'ID not provided.';
    exit;
}
