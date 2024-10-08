<?php
include('db_connect.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mencari pengguna berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verifikasi password
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];  // Set session user_id
        $_SESSION['username'] = $user['username']; // Set session username
        header('Location: dashboard.php');  // Redirect ke halaman utama setelah login
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/loginregister.css"> <!-- Link to CSS -->
</head>
<body>
    <?php include('navbar.php'); ?>

    <h2>Login</h2>
    <form method="post" action="login.php">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br>

        <div class="button-group">
            <button type="submit">Login</button>
            <a href="register.php" class="register-button">Register</a>
        </div>
    </form>

    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
