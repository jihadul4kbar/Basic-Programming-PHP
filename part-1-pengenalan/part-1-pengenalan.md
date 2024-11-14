---
theme : "night"
transition: "slide"
highlightTheme: "monokai"
logoImg: "/img/logo-stmik.png"
slideNumber: false
title: "Pengenalan Bahasa PHP"

---
<!-- .slide: data-background="#dddddd" -->
![Logo PHP ](https://www.php.net/images/php8/logo_php8_3.svg)
### *Hypertext Preprocessor*
by [Jihadul Akbar](https://jihadul4kbar.github.io/)

---

### Agenda

1. Apa itu PHP ?
2. Sejarah PHP ?
4. Kebutuhan Pengembangan
4. Instalasi 
5. Penulisan Kode PHP

---

### Apa itu PHP ?

--

- PHP adalah singkatan dari "*PHP: Hypertext Preprocessor*"
- PHP adalah bahasa pemrograman open source yang banyak digunakan
- Kode/Script PHP dijalankan di server
- PHP gratis untuk diunduh dan digunakan

--

#### PHP luar biasa dan populer

- Sebagai kode inti WordPress
- Cukup untuk menjalankan jejaring sosial besar!
- Mudah untuk di pelajari bagi pemula!

--

#### Apa itu File PHP?
- File PHP dapat berisi teks, HTML, CSS, JavaScript, dan kode PHP
- Kode PHP dijalankan di server, dan hasilnya dikembalikan ke browser sebagai HTML biasa. 
- File PHP memiliki ekstensi ".php"

--

#### Apa yang bisa dilakukan oleh PHP?

- Membuat konten dimamis.
- Membuat, membuka, membaca, menulis, hapus, dan menutup file di server.
- Mengumpulkan data dari form.
- Mengirim dan menerima cookies.
- Menambah, menghapus, dan memodifikasi data dari database
- Mengengkripsi data.

--

#### Kenapa PHP ?

- Multi platforms (Windows, Linux, Unix, Mac OS X)
- Kompetibel dengan banyak server (Apace, Ngix, ISS)
- Suport dengan berbagai database 
- Gratis
- Mudah di pelajari dan berjalan efisien pada server

--

---

### Sejarah PHP

--

![Resmus Lardof](/img/remus.webp)

PHP pertama dikembangkan oleh Resmus Lardof 1994

*untuk mecatat pengunjung resume*

--

PHP Versi dan Tahun
- php 3.0 - 1997
- php 4.0 - 2000
- php 5.0 - 2004
- php 6.0 - 
- php 7.0 - 2015
- php 8.0 - 2020 
- php 8.3 - 2024

[Sumber](https://www.php.net/manual/en/history.php.php)

---

### Kebutuhan Pengembangan

--

#### Kebutuhan 

Server 
Apache, Ngix, Litespeed 

IDE ditor  notepad, sublime text, visual studio code

Browser Mozilla firefox, google corme

*Kebutuhan server dan php dapat menggunakan bundel aplikasi seperti xampp, wapserver, laragos*.

--

Cara manual 

Instalasi php langsung download pada link berikut 
sesuai dengan versi php yang diiginkan

https://windows.php.net/download#php-8.3


--


XAMPP

[Download](https://www.apachefriends.org/)


-- 

Cek versi PHP
1. Buka Terminal 
2. Ketik php -v

```
PHP 8.0.30 (cli) (built: Sep  1 2023 14:15:38) ( ZTS Visual C++ 2019 x64 )
Copyright (c) The PHP Group
Zend Engine v4.0.30, Copyright (c) Zend Technologies
```

--

Setting Path php di windows
1. Kelik kanan MyComputer -> Propertis
2. Advanced System Settings -> Environment Variables
3. Jendela System Variabel 
4. Kelik dua kali pada bagian Path
5. Pilih tombok New 
6. Isi dengan lokasi php pada XAMPP yakni C:/exampp/php -> OK
7. Buka terminal dan coba ketik php -v
---

#### Penulisan Kode PHP

--

```
<?php 

echo "Hello World";

?>

```

--

simpan dengan extensi php

latihan.php

--

buka terminal pada folder tempat disimpan 
dan jalankan perintah 

```
php latihan.php

```

--

Membuat server dari Commnd Line 

```
php -S localhost:8000
```

--


PHP Info

untuk melihat detail php yang terinstal 

```
<?php 
phpinfo();
>

---

#### Q- A

---

Materi Selanjutnya

- Pengenalan XAMPP ekosistem
- Fundametal PHP

---

#### Refrensi

- [Dokumentasi PHP](https://www.php.net/docs.php)
- [W3School PHP](https://www.w3schools.com/php/)




