<h1>Menampilkan bilangan prima 1 s/d 100</h1>
<?php 
function ganjil($n){
  
      for($i=1;$i<=$n;$i++){  //smw angka yg akan di cek
              
                 $counter = 0; 
                 for($j=1;$j<=$i;$j++){ //smw kemungkinan faktor pembagi
                  
           //          //jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1
                    if($i % $j==0){ 
                        
                          $counter++;
                    }
              }
            
           //jumlah warna hijau / faktor habis bagi nya harus 2 
            if($counter==2){
                 
                   print $i."<br/>";
            }
     }
} 

ganjil(12);  //cari bilang prima dari 1-12