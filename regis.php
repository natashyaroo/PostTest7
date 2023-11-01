<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); 

    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);


    mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: login.php"); 
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_stmt_close($stmt);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrasi Admin</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="Logo Tim">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="#tim">Guild Waker!</a></li>
                    <li><a href="#about">About Us</a></li>
                </ul>
                <button id="darkModeToggle" class="dark-mode-button"></button>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Registrasi</h2>
            <div class="input-container">
                <form method="POST" action="">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" step="any" required>
                    </div>
                    <br>
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer-me">
        <p>&copy; #GUILDWAKER</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>