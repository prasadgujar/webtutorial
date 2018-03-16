<?php

$rand  = rand(1,6);
$max  = getrandmax();
echo $rand.'<br>';
//echo $max;

?>

<form action = "rand.php" method = "POST">
 <input type = "submit" name = "roll" value = "roll dice">
</form>