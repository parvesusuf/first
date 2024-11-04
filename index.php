<?php


 $a=0;

 $b=1;

 $c=1;

for($i=0; $i<10; $i++){
   echo $a;
   echo PHP_EOL;
   $a=$c;
   $c=$b;
   $b=$a+$c;
   
  
   
}