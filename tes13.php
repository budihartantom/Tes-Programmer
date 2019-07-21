<?php
function angka_fibonacci($angka)
{
    $angka_sebelumnya = 0;
    $angka_sesudahnya = 1;

    $hasil = "$angka_sebelumnya $angka_sesudahnya";

    for ($i = 0; $i < $angka - 2; $i++) {
        $output = $angka_sesudahnya + $angka_sebelumnya;
        $hasil = $hasil . " $output";

        $angka_sebelumnya = $angka_sesudahnya;
        $angka_sesudahnya = $output;
    }
    return $hasil;
}
echo angka_fibonacci(8);
echo "<br>";

echo angka_fibonacci(20);
echo "<br>";

echo angka_fibonacci(10);
echo "<br>";
