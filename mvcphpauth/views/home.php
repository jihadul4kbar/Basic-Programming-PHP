<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard MVC PHP</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>MVC Pemrograman PHP</h1>
    <p>Silakan pilih menu di bawah ini:</p>

    <h2>Selamat Datang, <?= $_SESSION['user']['name']; ?>!</h2>
    <p>Email: <?= $_SESSION['user']['email']; ?></p>
    
    <div class="menu">
        <a href="index.php?action=index">Manajemen Produk</a>
        <a href="index.php?action=user_index">Manajemen User</a>
        <a href="index.php?action=logout">Logout</a>
    </div>
</body>
</html>
