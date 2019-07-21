<title>Untuk belajar</title>
<?php
    $kata = $_POST['kata'];
     $naru_ni_kata_katae = strlen($kata);
    for($i=0;$i<($naru_ni_kata_katae-1)/2;$i++)
    {
        $mis = $kata[$i];
        $kata[$i] = $kata[$naru_ni_kata_katae-$i-1];
        $kata[$naru_ni_kata_katae-$i-1] = $mis;
    }
    echo $kata;
?>