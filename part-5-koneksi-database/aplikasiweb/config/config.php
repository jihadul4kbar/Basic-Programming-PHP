<?php
$host = 'localhost';
$user = 'belajar';
$password = 'belajar';
$database = 'belajarphp';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>