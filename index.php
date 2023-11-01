<?php
session_start();
if (!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit();
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
    <title>Tim Esports</title>
</head>
<body>
    <button id="darkModeToggle" class="dark-mode-button"></button>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="Logo Tim">
            </div>
            <nav>
                <ul>
                    <li> <?= $date ?> </li>
                    <li><a href="dashboard.php">List Member</a></li>
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#tim">Guild Waker!</a></li>
                    <li><a href="me.php">More About Us</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div id="foto-bersama">
            <img src="main.png" alt="FotoTim">
        </div>
        <section id="tim">
            <h2>WE ARE WAKER!</h2>
            <div class="anggota-tim">
                <div class="anggota">
                    <img src="Abay.png" alt="1">
                    <h3>Abay</h3>
                </div>
                <div class="anggota">
                    <img src="Legaeloth.png" alt="2">
                    <h3>Legaeloth</h3>
                </div>
                <div class="anggota">
                    <img src="Adi.png" alt="3">
                    <h3>Adi</h3>
                </div>
                <div class="anggota">
                    <img src="PacMan.png" alt="4">
                    <h3>Pacman</h3>
                </div>
                <div class="anggota">
                    <img src="Razor.png" alt="5">
                    <h3>Razor</h3>
                </div>
            </div>
        </section>
        
        <div class="gabung">
            <a href="daftar.php" class="join-button"><p>Ayo Bergabung Menjadi Member Guild</p></a>
        </div>
    </main>


    <footer>
        <p>&copy; #GUILDWAKER</p>
    </footer>
    <div id="comingSoonPopup" class="popup">
        <div class="popup-content">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <p>Coming Soon</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
