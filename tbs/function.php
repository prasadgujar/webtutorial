<?php
function myname()
{
  echo 'prasad';

}

echo 'my name is ';
myname();
echo '<br>';
$i = 10;
$j = 10;

function add($no1,$no2)
{
  echo $no1+$no2;

}

function displaydate($dd,$d,$y)
{
   echo $dd.' '.$d.' '.$y;
}

displaydate('Monday',31,2018);
echo '<br>';
add($i,$j);
echo '<br>';

function addd($no1,$no2)
{
  $res = $no1 + $no2;
  return $res;

}

function div($no1,$no2)
{
  $res  = $no1/$no2;
  return $res;
}

$sum  = div(addd(10,10),addd(5,5));

echo $sum;


?>
