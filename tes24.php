<?php
// Contoh Perulangan Foreach
$nama_keluarga = [

    "M.Budi Hartanto",
    "Susi Dewiyana",
    "Andi Winata",
    "Nanda Febiyanti"
];

echo "<h1>Nama Keluarga Budi</h1>";
echo "<ul>";
foreach ($nama_keluarga as $my_family) {
    echo "<h1><li>$my_family</li></h1>";
}
echo "</ul>";
?>