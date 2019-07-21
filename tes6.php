<h1>Menampilkan bilangan prima 1 s/d 12</h1>
<?php 

$n=12;

for($a=1;$a<=$n;$a++){
 //data input bilangan
        
        $z=0;
        for($b=1;$b<=$a;$b++){  //data input bilangan kedua
                

                if($a%$b == 0){  // bilangan terbagi

                 $z++; 
              
         }
      }

     if($z == 2){

       echo $a.'</br>';
   

     }         

    }   


?>  

