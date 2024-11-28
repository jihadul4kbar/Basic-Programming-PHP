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
### *PHP Fundamental*
 [Jihadul Akbar](https://jihadul4kbar.github.io/)

#### Pertemuan Kedua

---

### Agenda

1. Sintak PHP
2. Komentar 
3. Standar Output
4. Variabel 
5. Data Type
6. Oprator
7. Percabangan
8. Perulangan
9. Fungsi
10. Array 
11. Super Global Variabel
12. RigEx

---

### 1. Sintak PHP

```php 
<?php 
    // Kode PHP 
?>
```

---

### 2. Sintak PHP

```php 
<?php 
    // komentar satu baris

    /*
        Komentar 
        Multi Line
    */
?>
```

---

### 3. Standar Output

```php
/* 
PENULISAN PHP 
PHP di dalam HTML
HTML di dalam PHP
*/ 
<?php
    echo "Selamat Belajar PHP <br>";
	print " tes ini menggunkan print <br>";
?>
```

---

### 4. Variabel 

``` php
<?php
	/* VARIABLE 
	 Deklarasi varibel dalam php menggunakan $
	 di ikuti oleh nama variabel
	 tidak boleh diawali dengan angka
	 boleh mangandung angka
    */
	   $nama = " Jihadul Akbar";
	   $pesan = "Hallo.. Semangat dalam belajar <b>".$nama."<b><br>";
	   echo $pesan;
?>
```

---

### 5. Data Type

```php
<?php
    /*
    String
    Integer
    Float 
    Boolean
    Array
    Object
    NULL
    Resource
    */
?>
```
--

String
```php
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
?>

--

Integer

```php
<?php 
    $x = 5;
    var_dump($x);
?>
```

--

Float

```php
<?php 
    $x = 10.365;
    var_dump($x);
?>
```

--

Boolean

```php
<?php 
    $x = true;
    var_dump($x);
?>
```

--

Array

```php
<?php 
   $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
?>
```

--

Null

```php
<?php 
    $x = "Hello world!";
    $x = null;
    var_dump($x);
?>
```

--

Ganti Type Data

```php
<?php 
    $x = 5;
    var_dump($x);

    $x = "Hello";
    var_dump($x);
?>
```

--

---

### 6. Oprator

--

Aritmatika

```php
<?php 
	// ARITMATIKA 
	// + - * / % 
	$a = 20;
	$b = 80;
	echo $a + $b."<br>"; 
	echo $a * $b."<br>";
?>  
```
--

Penggabungan String

```php
<?php 
	// CONCATENATION / CONCAT / PENGGABUNGAN STRING

	$nama_depan = " Jihadul ";
	$nama_belakang = "Akbar";

	echo $nama_depan." ".$nama_belakang;
	echo "<br>";
?>  
```
--

Penugasan

```php
<?php 
	// PENUGASAN / ASSIGNMENT 
	// =, +=, -=, *=, /=, %=, .=
	$x  = "STMIK Lombok";
	$x .= " ";
	$x .= "Praya NTB";
	echo $x;
	echo "<br>";

	$y = 1;
	$y +=5;
	$y -=5;
	echo $y;
	echo "<br>";

?>  
```
--

Perbandingan

```php
<?php
	// PERBANDINGAN
	// ==, <=, >=, >, <, !=

	$a = 10;
	$b = "10";
	if($a === $b){
		echo "Nilai A Sama dengan B";
	}else{
		echo " Nilai A Tidak Sama Degan B";
	}

?>  
```
--

Komparasi 

```php
<?php

	// IDENTITAS / STRICT COMPARATION
	// ===, !==

    $a = 50;
    $b = "50";

    echo $a == $b;
    echo $a === $b;
?>  
```
--

Logika

```php
<?php

	// LOGIKA / LOGICAL
	// &&, ||, !

    $x = 100;  
    $y = 50;

    if ($x == 100 and $y == 50) {
        echo "Hello world!";
    }
?>  
```

---

### 7. Percabangan

--

Percabangan IF 

```php
<?php 
// Pengkondisian atau percabangan
// if else
// if else if else
// ternary
// swich 

$nilai = 20;

echo "Nilai Awal:  : ".$nilai;
if ($nilai >= 90){
	echo " Nilai : A";
}else if($nilai >= 70 ){
	echo " Nilai : B";
}else {
	echo " Nilai : C";
}

?>
```

--

Ternary if else 
```php
<?php 

// ternary if else
// (kondisi) ? benar : salah 
echo "<br>";
$kecepatan = 90;
echo $kecepatan >= 80 ? " Kurangi Kecepatan" : "Kecepatan Stabil";
//(kondisi) ? benar : (kondisi ? benar : salah)

echo "<br>";
$nilai = 75;
echo ($nilai >= 90) ? "Nilai : A" : ($nilai >= 70  ? "Nilai : B" : "Nilai : C");
?>
```

--

Swich 

```php 
<?php 
// Swich  Rumus
/* swich (kondisi)
 		case "kondisi":
 		echo "Nilai Benar";
 		break;

 		default:
 		echo "Nilai";
*/

$warna = "Hijau";

switch ($warna) {
	case "Merah":
		echo "Warna Kesukaan Anda Adalah Merah";
		break;
	case "Biru" :
		echo "Warna Kesukaan Anda Adalah Biru";
		break;
	case "Hijau":
		echo "Warna Kesukaan Anda Adalah Hijau";
		break;
	default:
		echo "Warna Kesukaan Bukan Merah, Biru atau Hijau";
		break;
}
?>
```
--

Perulangan dan Percabangan 

```html
<table border="1" cellpadding="10" cellspacing="0">
	<?php for( $i = 1; $i <= 5; $i++) : ?>
		<?php if($i % 2 == 0) :?>
			<tr style="background-color: silver">
		<?php else : ?>
			<tr>
		<?php endif;?>
			<?php for($j = 1; $j <= 5; $j++ ) : ?>
				<td><?= "$i, $j";?></td>
			<?php endfor;?>
		</tr>
	<?php endfor; ?>

</table>
```
---

### 8. Perulangan

--

Forech 

```php
<?php 

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

?>
```

---

### 9. Fungsi

--

Definisikan Fungsi

```php 
<?php 
function myMessage() {
  echo "Hello world!";
}
myMessage();
?>
```
---

### 10. Array 

--

Array 

```php 
<?php 
$cars = array("Volvo", "BMW", "Toyota");
?>
```

--

Assositif Array 

```php
<?php 
$car = array("brand"=>"Ford", 
            "model"=>"Mustang", 
            "year"=>1964);
var_dump($car);
?>

```

---

### 11. Super Global Variabel

--

```
<?php 
$GLOBALS // Global Variabel
$_SERVER // Variabel untuk server
$_REQUEST  // Variabel untuk permintaan
$_POST  // Method post
$_GET // Method Get
$_FILES // Proses file
$_ENV // Evironment
$_COOKIE // Cookes
$_SESSION  // Session 
?>
```
---

### 12. RigEx

--

RigEx (regular expression) digunakan untuk untuk melakukan semua jenis operasi pencarian teks dan penggantian teks.

--

mencari tulisan Lombok
```php 
<?php 
$str = "Visit STMIK Lombok";
$pattern = "/Lombok/i";
echo preg_match($pattern, $str);
?>

---

### Q - A

---

