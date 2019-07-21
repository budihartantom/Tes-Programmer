<?php
$contoh1 = true and false;
echo '$contoh1 = ';
echo var_dump($contoh1)."<br/>";
 
$contoh2 = (true and false);
echo '$contoh2 = ';
echo var_dump($contoh2)."<br/>"; 
 
$contoh3 = (true xor false);
echo '$contoh3 = ';
echo var_dump($contoh3)."<br/>";
 
$contoh4 = (false or true && false);
echo '$contoh4 = ';
echo var_dump($contoh4)."<br/>";
 
$a=true;
$b=false;
$contoh5 = ($a and $b || $a or b);
echo '$contoh5 = ';
echo var_dump($contoh5);
?>