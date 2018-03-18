<?php
$filename = 'name.txt';
$handle = fopen('name.txt','r');
$datain = fread($handle,filesize($filename));

$name_array = explode(',',$datain);

foreach ($name_array as $value) {
    echo $value .'<br>';
}

echo $name_array[0];
?>