<?php
function cekUserLogin() {
    // Mulai session jika belum dimulai
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Cek apakah user sudah login
    if (!isset($_SESSION['user'])) {
        // Redirect ke halaman login
        header("Location: index.php?action=login");
        exit();
    }
}
?>
