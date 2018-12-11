<?php
 
$angka = '1234567890';
function formatRupiah($angka) {
 
    if(is_numeric($angka)) {
        $format_rupiah = 'Rp ' . number_format($angka, '2', ',', '.');
        return $format_rupiah;
    }
    else {
        echo "$angka" . " bukan angka yang valid!" . "\n";
    }
}
echo formatRupiah($angka);