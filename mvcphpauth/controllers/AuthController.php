<?php
require_once 'models/UserModel.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $user = $this->userModel->getUserByEmail($email);
    
            if (!$user) {
                $_SESSION['error'] = "Email tidak ditemukan!";
            } elseif (!password_verify($password, $user['password'])) {
                $_SESSION['error'] = "Password salah!";
            } else {
                $_SESSION['user'] = $user;
                header("Location: index.php?action=home");
                exit();
            }
    
            // Redirect kembali ke halaman login jika ada kesalahan
            header("Location: index.php?action=login");
            exit();
        }
        include 'views/login.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
        exit();
    }
}
?>
