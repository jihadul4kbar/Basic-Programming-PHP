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
### *PHP Method Get dan Post*
 [Jihadul Akbar](https://jihadul4kbar.github.io/)

#### Pertemuan Ke Empat

---

#### GET VS POST

--

Metode GET dan POST digunakan untuk mengirim data dari klien (browser) ke server. Keduanya memiliki karakteristik dan kegunaan yang berbeda.

--

#### Metode GET

--

##### Karakteristik

1. Data dikirim melalui URL dalam format query string.
2. Ukuran data terbatas, biasanya hingga 2048 karakter (tergantung browser/server).
3. Data terlihat di URL sehingga kurang aman untuk data sensitif.
4. Cocok untuk operasi yang tidak mengubah data di server, seperti pencarian atau filter.

--

Contoh Penggunaan : 

Menampilkan hasil pencarian berdasarkan kata kunci.

--

Kode Form 

```
<form action="process.php" method="GET">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Submit</button>
</form>
```

--

Kode PHP

```php
<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Hello, $name!";
}
?>

```

--

##### Metode POST

--

#### Karakteristik:

1. Data dikirim di dalam body request, tidak terlihat di URL.
2. Ukuran data lebih besar dibandingkan GET.
3. Lebih aman untuk data sensitif seperti password karena tidak ditampilkan di URL.
4. Cocok untuk operasi yang mengubah data di server, seperti login atau penyimpanan data.

--

Contoh Penggunaan:

Form Register / Form Login

--

Form HTML
```html
<form action="process.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <button type="submit">Register</button>
</form>
```

--

Kode PHP


```php
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    echo "User $username registered successfully!";
}
?>
```

--

Tabel perbedaan 

| Aspek        | GET                              | POST                         |
|--------------|----------------------------------|------------------------------| 
|Lokasi Data   |URL (query string)                | Body request                 |
|Keamanan      |Kurang aman (data terlihat di URL)| Lebih aman                   |
|Ukuran Data   |Terbatas                          | Tidak terbatas (praktis)     |
|Kegunaan      |Ambil data tanpa modifikasi| Kirim data yang memodifikasi server |

---

### Q & A

---



