<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Jika sudah login, tampilkan konten halaman
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>! You are logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
