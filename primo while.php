<?php
$num = 7;
$i = 1;
$count = 0;

do{
 if($num % $i == 0)
  $count++;
 $i++;
}while($i<= $num);

if($count == 2)
 echo "$num eh um numero primo";
else
 echo "$num nao eh um numero primo";
?>