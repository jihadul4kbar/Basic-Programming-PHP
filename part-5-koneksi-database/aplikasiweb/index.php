<?php
require 'config/config.php';
// Mengambil data dari database
$query = $conn->query("SELECT * FROM mahasiswa");
$dataMahasiswa = [];
while ($row = $query->fetch_assoc()) {
    $dataMahasiswa[] = $row; // Menyimpan setiap baris data ke dalam array
}

include('layout/header.php');
echo "<h2>Data Mahasiswa</h2>";
if (count($dataMahasiswa) > 0):
    $no=1; 
    foreach ($dataMahasiswa as $index => $row):
    echo $no++." | ".$row["nim"]." | ".$row["nama"]." | ".$row["jurusan"]." | ".$row["email"]." | Edit|Hapus <br>";
    endforeach;
else: 
    echo "Data Tidak Ada ";
endif;

include("layout/footer.php");
?>