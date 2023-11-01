<?php
session_start();
if (!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit();
}
require 'koneksi.php';
$id = $_GET['id_registrasi'];

$result = mysqli_query($conn, "select * from member_baru where id_registrasi = '$id'");

$member_baru = [];

while ($row = mysqli_fetch_assoc($result)) {
    $member_baru[] = $row;
}

$member_baru = $member_baru[0];

if (isset($_POST['ubah'])) {
    $username = $_POST['username'];
    $level = $_POST['level'];
    $role = $_POST['role'];

    $result = mysqli_query($conn, "update member_baru set level = '$level', username = '$username', role = '$role' where id_registrasi = '$id'");
    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'dashboard.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            </script>
        ";
    }
}
date_default_timezone_set('Asia/Makassar');
$date = date('d M Y H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>
<body>
    <header>
    </header>

    <main>
        <div class="container">
            <h2>Edit Data</h2>
            <div class="input-container">
                <form method="POST" action="">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" step="any" required>
                    <br>
                    <label for="level">Level Akun:</label>
                    <input type="number" id="level" name="level" step="any" required>
                    <br>
                    <div class="input-container">
                        <label for="role">Role:</label>
                        <div class="role-options">
                            <input type="radio" name="role" id="igl" value="IGL">
                            <label for="igl" class="role-label">IGL</label>

                            <input type="radio" name="role" id="rusher" value="Rusher">
                            <label for="rusher" class="role-label">Rusher</label>

                            <input type="radio" name="role" id="flanker" value="Flanker">
                            <label for="flanker" class="role-label">Flanker</label>

                            <input type="radio" name="role" id="support" value="Support">
                            <label for="support" class="role-label">Support</label>
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Submit" name="ubah">
                </form>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>