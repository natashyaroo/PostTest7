<?php
session_start();
if (!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit();
}
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
        <li><a href="index.php">Beranda</a></li>
    </ul>
    <button id="darkModeToggle" class="dark-mode-button"></button>
</nav>
        </div>
    </header>

    <main>
        <section id="ketua">
            <div class="ketua-container">
                <div class="ketua-info">
                    <h2>Ketua Guild</h2>
                    <div class="ketua-foto">
                        <img src="Untitled-1.png" alt="Foto Ketua">
                    </div>
                    <div class="ketua-detail">
                        <h3>Reviansa Fakhruddin Aththar</h3>
                        <p>2209106066</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-me">
        <p>&copy; #GUILDWAKER</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
