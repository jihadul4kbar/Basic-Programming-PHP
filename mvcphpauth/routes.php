<?php
require_once 'controllers/ProductController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/AuthController.php';
require 'middleware/auth.php'; // Memanggil middleware untuk cek user login

$productController = new ProductController();
$userController = new UserController();
$authController = new AuthController();

$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'home':
        cekUserLogin(); // Memanggil middleware untuk cek user login
        // Jika user sudah login, tampilkan halaman utama
        include 'views/home.php'; // Menampilkan halaman utama dengan menu
        break;
    // Routing untuk Produk
    case 'index':
        cekUserLogin(); 
        $productController->index();
        break;
    case 'create':
        cekUserLogin(); 
        $productController->create();
        break;
    case 'store':
        cekUserLogin(); 
        $productController->store();
        break;
    case 'edit':
        cekUserLogin();    
        $productController->edit($id);
        break;
    case 'update':
        cekUserLogin(); 
        $productController->update($id);
        break;
    case 'delete':
        cekUserLogin();
        $productController->delete($id);
        break;

    // Routing untuk User
    case 'user_index':
        cekUserLogin();
        $userController->index();
        break;
    case 'user_create':
        cekUserLogin();
        $userController->create();
        break;
    case 'user_store':
        cekUserLogin();
        $userController->store();
        break;
    case 'user_edit':
        cekUserLogin();
        $userController->edit($id);
        break;
    case 'user_update':
        cekUserLogin();
        $userController->update($id);
        break;
    case 'user_delete':
        cekUserLogin();
        $userController->delete($id);
        break;

    default:
        $authController->login();
        break;
}
?>
