<?php

$browser = get_browser(null,true);

//print_r ($browser);

//echo $browser['browser'];

$brow = $browser['browser'];

$brow = strtolower($brow);


if($brow=='Default Browser')
{
    echo 'this is shit';
}
else {
    echo 'this is ultra shit';
}

//echo $brow;
?>