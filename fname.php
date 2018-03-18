<?php
$filename = 'filename.txt';
$rand = rand(1000,9999);

if(rename('filename',$rand.'.txt'))
{
    echo 'file is renamed';

}
else {
    echo 'gatbage stuff ';
}
?>