<?php
require 'config/Database.php';

$db = new Database();
$password = password_hash("adminmvc", PASSWORD_DEFAULT);

try {
    $stmt = $db->conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
    $stmt->execute([
        ':name' => 'Admin',
        ':email' => 'admin@mvc.com',
        ':password' => $password
    ]);
    echo "User admin berhasil dibuat!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
