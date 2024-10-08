<?php
// Cek apakah sesi sudah dimulai, jika belum maka mulai sesi
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Mendapatkan nama file saat ini
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <ul>
        
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <?php if ($current_page !== 'login.php' && $current_page !== 'register.php'): ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
            <!-- Hide register link on login and register pages -->
            <?php if ($current_page !== 'login.php' && $current_page !== 'register.php'): ?>
                <li><a href="register.php" class="register-button">Register</a></li>
            <?php endif; ?>
        <?php endif; ?>
    </ul>
</nav>
