<?php
	$n=1000;
	for($i=1;$i<=$n;$i++){
		$d=0;
		for($j=1;$j<=$i;$j++){
			if($i%$j == 0){
		$d++;
		}
	}
	if($d == 2){
		echo $i."<br>";
	}
}
?>