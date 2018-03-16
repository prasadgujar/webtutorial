<?php

//echo 'the current time is'.time();

$time  = time();
$atime = date('D M Y @H:i:s',$time);

echo 'the current time is '.$atime;

?>