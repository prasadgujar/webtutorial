<?php
$handle = fopen('name.txt','a');
fwrite($handle,"\n".'yoyoyo'."\n");
fwrite($handle,'nice');
fclose($handle);


?>

<form action="file.php" method="POST">
  Name:<br>
  <input type="text" name="name"><br><br>
  <input type="submit" value="submit">
</form>