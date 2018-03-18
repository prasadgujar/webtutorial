<?php
if(isset($_POST['name']))
{
    $name = $_POST['name'];

    $handle = fopen('name.txt','a');
    fwrite($handle,$name."\n");
    fclose($handle);

    $readin = file('name.txt');
    foreach ($readin as $fname) {
        echo trim($fname) .',';
    }

}
else {
    echo 'please type a name';
}
?>

<form action="filer.php" method="POST">
  Name:<br>
  <input type="text" name="name"><br><br>
  <input type="submit" value="submit">
</form>
