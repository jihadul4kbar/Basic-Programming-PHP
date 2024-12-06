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
### *PHP Data Array*
 [Jihadul Akbar](https://jihadul4kbar.github.io/)

#### Pertemuan Ketiga

---

#### Array 

Variabel yang memiliki banyak nilai, elemen array boleh memiliki type data yang berbeda pasangan antara key dan value dimana keynya adalah index, yang di mulai dari 0

---

### Membuat Array

---

#### Membuat array cara lama 

```php
$hari = array("Senin", "Selasa", "Rabu");
```

---

#### Cara Baru

```php
$bulan = ["Januari", "Februari", "Maret", "April"];
$acak = [ 324, "String", true];

```

---

#### Mencetak Array

---

```php
echo "<pre>";
print_r($acak);
echo "<br>";
// menampilkan isi dari array dengan menggunakan key atau index
echo $hari[0]." ".$bulan[1]." ".$acak[0];

// menambah isi array
//$hari[] = "Kamis";
//$hari[] = "Jumat"; 
var_dump($hari);
```

---

Meghapus Array

```php
// menghapus isi array
unset($hari[1]);

var_dump($hari);
var_dump($acak);

```

---

### Array Asosiatif

---

Array yang indexnya tidak menggunakan nomor atau angka. Index array berbentuk kata kunci.

---

Contoh 

```php
$artikel = [
		"judul" => " Belajar Array",
		"penulis" => " Yati",
		"kategori" => "Pemrograman PHP, Web",
		"view" => 150,
]; 

// menampilkan isi dari array asosiatif
echo "<hr>";
echo "Judul :".$artikel["judul"]."<br> 
~ Penulis :  ".$artikel["penulis"];
echo "<hr>";
```

---

Menampilkan Array 

---

```php
//Menampilakn data dalam array dengan for
for ($i=0; $i<count($bulan);$i++){
    echo $bulan[$i]."<br>";
}
```

---

``` php
echo "<hr>";
// Menampilkan data array dengan foreach
foreach ($hari as $day) {
	echo $day."<br>";
}
```

---

```php
echo "<hr>";
// Menampilkan data array dengan while
$i=0;
while ($i < count($acak)) {
	echo $acak[$i]."<br>";
	$i++;
}
```

---

```php
// Array Mutli Dimensi 
// array yang memiliki deimesi lebih dari satu 
$matrik = [
	[2,3,4],
	[7,5,0],
	[4,3,8],
];
// cara memanggil isi dari array
echo $matrik[1][0];

```

---

| No | NIM      | Nama          | Jurusan | Email          |
|----|----------|---------------| --------|----------------| 
|1   |SI20230001| Rama Yusuf    |SI       | rama@gmail.com |
|2   |SI20230002| Istiharah     |SI       | isti@gmail.com |
|3   |SI20230003| Almaira       |SI       | alma@gmail.com |
|4   |SI20230004| Emi           |SI       | emi@gmail.com  |
|5   |SI20230005| Yudha         |SI       | yudha@gmail.com|


---

Bagaimana menampilkan data mahasiswa dalam tabel ? 

---

### Q & A

---

### Terimakasih 

---






