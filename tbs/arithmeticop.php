<?php
$n  = 10;
$m  = 20;

echo $n+$m;

echo $n-$m;

echo $n*$m;

echo $n/$m;

$no  = 00;

$upper = 1000;
$lower = 500;

if($no >= $lower && $no <= $upper)
{
    echo "ok";
    
}
else {
    echo "number must be between $lower and $upper";
}
?>