<?php
/*
Untuk melihat hasil kode yang ditulis dapat menjalankan melalui 
visual studio code 
-> Terminal -> new Terminal -> php -S localhost:8000
*/

// Membuat type data String
$x = "Selamat Datang";
$y = "Belajar PHP";
$x = null;
$z = false;
$motor = array("Mio","Supra X", "CBR", 120, true);
$angka = 5;

// Kontanta / varabel yang tidak bisa di timpa
// kontanta harus ditulis dengan menggunakan huruf Kapital
const MATAKULIAH = "Pemrograman Web";
echo MATAKULIAH;

echo "<br>";
var_dump($angka);
echo "<br>";

$angka = "LIMA";

var_dump($angka);
echo "<br>";

var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($z);
echo "<pre>";
var_dump($motor);
var_dump($motor[4]);


//Oprator artimatika

$a = 20;
$b = 90;

echo "nilai A ".$a." dan nilai B ".$b."<br>";
echo "Penjumlahan ".$a + $b."<br>";
echo "Pembagian ".$b / $a."<br>";
echo "Perkalian ".$a * $a."<br>";

echo "<br>";

$a = 10;
$b = "10";
if($a === $b){
    echo "Nilai A Sama dengan B";
}else{
    echo " Nilai A Tidak Sama Degan B";
}

?>

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