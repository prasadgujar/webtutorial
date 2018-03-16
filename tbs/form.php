<?php

if(isset($_GET['user_name'])&&!empty($_GET['user_name']))
{
    echo $user_name = $_GET['user_name'];
    $user_name_lc = strtolower($user_name);
    if($user_name_lc=='prasad')
    {
        echo 'your are the best '.$user_name;
    }
}
?>

<form action='form.php' method='GET'>
 Name : <input type="text" name = "user_name"><br><br>
 <input type="submit" value= 'submit'>
</form>