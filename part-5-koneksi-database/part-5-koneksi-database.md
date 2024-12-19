---
theme : "night"
transition: "slide"
highlightTheme: "monokai"
logoImg: "/img/logo-stmik.png"
slideNumber: false
title: "Method Get dan Post"

---
<!-- .slide: data-background="#dddddd" -->
![Logo PHP ](https://www.php.net/images/php8/logo_php8_3.svg)
### *PHP Koneksi Database*
 [Jihadul Akbar](https://jihadul4kbar.github.io/)

#### Pertemuan Ke Lima

---

## Database / Basis Data

Kumpulan data yang disimpan secara elektronik dan terorganisir secara sistematis. Data yang disimpan dalam database dapat berupa kata, angka, gambar, video, dan file.

--

## MySQL atau MariaDB

Sistem manajemen basis data relasional (RDBMS) yang digunakan untuk menyimpan, mengelola, dan mengambil data.

--

## Buat Database

```SQL
CREATE DATABASE belajarphp;
```

--

## Membuat Tabel 

```sql
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `jurusan` enum('Teknik Informatika','Sistem Informasi')
   NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
```
--

## Menambah Data 

```sql 
INSERT INTO 
`mahasiswa` (`id`, `nim`, `nama`, `email`, `jurusan`, `gambar`) 
VALUES
(1, 'TI16190020', 'Samsul Hadi', 'samsulhadi@gmail.com', 'Teknik Informatika', 'samsul.jpg'),
(2, 'TI16190011', 'Januardi Putra', 'januardiputra@gmail.com ', 'Teknik Informatika', 'januardi.jpg'),
(3, 'TI16190025', 'M. Izzudin', 'm-izzudin@gmail.com', 'Teknik Informatika', 'izzudin.jpg'),
(4, 'TI16190016', 'Muh. Efendi', 'muh.efendi@gmail.com', 'Teknik Informatika', 'efendi.jpg'),
(14, 'TI16190001', 'TEDI RIDWAN, S.KOM', 'tediridwan@gmail.com', 'Teknik Informatika', '');
```

---

### Koneksi PHP dengan Database

--

#### Buat Folder Dengan Struktur

```php
aplikasiweb
├── config
│   └── config.php
└── layout
│   └── header.php
|   └── footer.php
├── index.php
 
```
--

#### File config.php

```php
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'belajarphp';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>
```

--

#### File Index.php

```php
<?php

require 'config/config.php';
// Mengambil data dari database
$query = $conn->query("SELECT * FROM mahasiswa");
$dataMahasiswa = [];
while ($row = $query->fetch_assoc()) {
    $dataMahasiswa[] = $row; // Menyimpan setiap baris data ke dalam array
}
if (count($dataMahasiswa) > 0):
    $no=1; 
    foreach ($dataMahasiswa as $index => $row):
    echo $no++."|".$row["nim"]."|".$row["nama"]."| ".$row["jurusan"]."|".$row["email"]."Edit|Hapus <br>";
    endforeach;
else: 
    echo "Data Tidak Ada ";
endif;
?>
```

--

#### File Header.php

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Web</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .header{
            background-color:#2fc4b2;
            text-align:center;
            padding: 10px;
        }
        .footer{
            background-color:#2fc4b2;
            text-align:center;
            padding: 10px;
        }
        .container{
            width: 960px;
            margin: 0 auto;
            padding: 50px;
        }
    </style>
</head>
<body>
<h1 class="header">Aplikasi Web</h1>
<div class="container">
```

--

#### File Footer.php

```html
    </div>
    <div class="footer">
        <h1>Footer</h1>
        <p>Copyright @ <?= date('Y');?> Belajar PHP</p>
    </div>
</body>
</html>
```

---

### Tugas Dirumah

1. Buat Fungsi Untuk Tambah, Ubah dan Hapus Data


---

### Q & A

---
