<?php
// Siapkan 2 angka awal
$angka_sebelumnya = 0;
$angka_sekarang  = 1;

// Tampilkan 2 angka awal
echo "$angka_sebelumnya $angka_sekarang";
for($i=0; $i<10; $i++)
{
   // Hitung angka yang akan ditampilkan
	$hasil = $angka_sekarang + $angka_sebelumnya;
	echo " $hasil";

	// Siapkan angka untuk perhitungan berikutnya
	$angka_sebelumnya = $angka_sekarang;
	$angka_sekarang = $hasil;
}

?>