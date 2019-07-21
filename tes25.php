<?php
// Contoh Perulangan Bersarang/nested loop
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "<h1>Tampilkan perulangan bersarang ($i, $j)</h1><br>";
    }
}
?>
<br>
<?php
// Contoh Lain Perulangan Bersarang/Nested Loop 
$i = 0;
while ($i < 10) {
    for ($j = 0; $j < 10; $j++) {
        echo "<h1>Tamapilkan perulangan bersarang lainnya ($i, $j)</h1><br>";
    }

    $i++;
}

?>