<?php
session_start();
if (!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit();
}
require 'koneksi.php';

$result = mysqli_query($conn, 'SELECT * FROM member_baru');

$member_baru = [];

while ($row = mysqli_fetch_assoc($result)) {
    $member_baru[] = $row;
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
    <title>Ketua Guild</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="Logo Tim">
            </div>
        <nav>
            <ul>
                <li><a href="logout.php">Log Out</a></li>
                <li> <?= $date ?> </li>
                <li><a href="index.php">Beranda</a></li>
            </ul>
            <button id="darkModeToggle" class="dark-mode-button"></button>
        </nav>
    </header>

    <main>
        <section id="dash">
            <div class="dash-container">
                <div class="dash-info">
                    <h2>Data Member Baru<h2>
                    <?php
                    date_default_timezone_set('Asia/Makassar');
                    echo 'Today is ='.date('Y-m-d/l').'<br>';
                    ?>
    <table>
    <tr>
        <td>ID</td>
        <td>Foto</td>
        <td>Username</td>
        <td>Level</td>
        <td>Role</td>
        <td>Update Data</td>
    </tr>

    <?php foreach ($member_baru as $mbr) { ?>
        <tr>
            <td><?php echo $mbr['id_registrasi']; ?></td>
            <td><img src="img/<?=$mbr['gambar']?>" alt="" width="50px" height="50px"></td>
            <td><?php echo $mbr['username']; ?></td>
            <td><?php echo $mbr['level']; ?></td>
            <td><?php echo $mbr['role']; ?></td>
            <td>
                <a style="margin: 10px 0;" href="edit.php?id_registrasi=<?php echo $mbr[
'id_registrasi'
                ]; ?>" class="edit-button">Edit</a>
                <a href="delete.php?id_registrasi=<?php echo $mbr[
'id_registrasi'
                ]; ?>" class="delete-button">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

    </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
