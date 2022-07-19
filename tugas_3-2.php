<?php
// Defan menabung di Bank Rp. 150.000. Bunga 1 tahunnya adalah 12,5 %. 
// Maka jumlah tabungan Defan setelah 1 tahun adalah…
$tabungan = 150000;
$bungaPerTahun = 12.5;
$pot = $tabungan * ($bungaPerTahun / 100);
$hasil = $tabungan - $pot;
echo "Tabungan Awal = Rp. $tabungan<br>";
echo "Bunga Setahun = $bungaPerTahun %<br>";
echo "Total Tabungan Setahun = ?<br>";
echo "Jawaban : Rp. $hasil";
