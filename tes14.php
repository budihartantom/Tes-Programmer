<h1>Menampilkan bilangan prima 1 s/d 12</h1>
<?php

$z = 12;
for ($i = 1; $i <= $z; $i++) {
    $m = 0;

    for ($j = 1; $j <= $i; $j++) {

        if ($i % $j == 0) {
            $m++;
        }
    }
    if ($m == 2) {
        echo $i . '<br>';
    }
}

?>
