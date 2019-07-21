<h1>Menampilkan bilangan prima 1 s/d 100</h1>

<?php
function prima($n){

 for($a=1;$a<=$n;$a++){ // perulangan 1 sampai 100
            $k = 0;
            for($b=1;$b<=$a;$b++){ // perulangan bilangan pembagi
                        if($a % $b == 0){ // modulus
                                    $k++;
                        }
            }
            if($k == 2){ // salah satu syarat 2 bukan merupakan bilangan prima
                    echo $a.'<br>';
            }
    }

}
prima(12);	

?>