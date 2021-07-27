<?php

   $arr = [1, 1, 2, 3, 4 -51, 12, 12, 12, -51];

   $quantity = 0;

   for ($i=0; $i < count($arr) - 1; $i++) { 
     if($arr[$i] == $arr[$i+1]){
        $quantity++;
     }
   }

   echo '<pre>Дан массив ';
      var_dump($arr);
   echo '</pre>';

   echo "Количество последовательных пар: $quantity";

?>