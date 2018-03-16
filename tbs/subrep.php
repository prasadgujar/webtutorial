<?php
$string  = 'this part don\'t search. this part search';
$snew = substr_replace($string,'elastic',29,4);
$ssnew = str_replace('is','',$string);
echo $ssnew.'<br>';
echo $snew;


?>