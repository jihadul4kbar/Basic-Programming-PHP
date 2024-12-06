<?php

$hari = ['Senin', 'Selasa', 'Rabu'];
$bulan = ['Januari', 'Februari', 'Maret'];
$acak = [143, 'String', true, 1.14];
// print_r($hari);
echo "php -S localhost:8000";
echo "<pre>";

$hari[] = "Kamis";
$hari[] = "Jumat";
$hari[] = "Sabtu";
$hari[] = "Ahad";
$bulan[] = "April";
$bulan[] = "Mei";
$bulan[] = "Juni";
var_dump($hari, $bulan, $acak);


echo "<h1> Mencetak Dengan Perulangan for </h1>";
for ($i=0; $i<count($bulan);$i++){
    echo $bulan[$i]."<br>";
}

echo "<h1> Mencetak Dengan Perulangan forech </h1>";
foreach ($hari as $day) {
	echo $day."<br>";
}

$artikel = [
    [
    "judul" => " Belajar Array",
    "penulis" => " Yati",
    "kategori" => "Pemrograman PHP, Web",
    "view" => 150,
    ],
    [
    "judul" => " Belajar Array",
    "penulis" => " Yati",
    "kategori" => "Pemrograman PHP, Web",
    "view" => 150,
]
]; 

// menampilkan isi dari array asosiatif
// echo "<hr>";
// echo "Judul :".$artikel["judul"]."<br> 
// ~ Penulis :  ".$artikel["penulis"];
// echo "<hr>";

foreach ($artikel as $row){
    echo $artikel['judul'];
}


$matrik = [
	[2,3,4],
	[7,5,0],
	[4,3,8],
];
// cara memanggil isi dari array
echo $matrik[2][1];
?>