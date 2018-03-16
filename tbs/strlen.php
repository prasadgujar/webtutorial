<?php
$string = 'prasad';
$ss = 'how many charater is this there or there';
$slen = strlen($ss);

echo $slen;

for($x=0;$x<$slen;$x++)
{
    echo $ss[$x].'<br>';
}

$se = 'how many charater is this there or there';

echo  $slow = strtolower($se).'<br>';
echo $supp = strtoupper($se);
?>