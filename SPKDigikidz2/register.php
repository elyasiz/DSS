<?php
include('db_connect.php');
include('navbar.php');  // Menyertakan navbar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Meng-hash password untuk keamanan

    // Memasukkan pengguna baru ke dalam database
    $sql = "INSERT INTO users (username, password, email, role) VALUES (?, ?, ?, 'guru')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $username, $password, $email);

    if ($stmt->execute()) {
        header('Location: login.php');  // Mengarahkan ke halaman login setelah registrasi sukses
    } else {
        $error = "Terjadi kesalahan: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/loginregister.css"> <!-- Link to CSS -->
</head>
<body>
    <h2>Register</h2>
    <form method="post" action="register.php">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br>

        <div class="button-group">
            <button type="submit">Register</button>
            <a href="login.php" class="register-button">Login</a>
        </div>
    </form>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
