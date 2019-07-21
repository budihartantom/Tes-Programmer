<?php
$n=10000;
for($i=1; $i <= $n; $i++){
	$z=0;
	for($j=1; $j<=$i; $j++){
		if($i%$j == 0){
			$z++;
		}
	}
	if($z == 2){
		echo $i."<br>";
	}
}
?>