<?php

//echo 'hidden';
$match = 'pass123';
if(isset($_POST['password']))
{
    $password = $_POST['password'];
    if(!empty($password))
    {
    if($password==$match)
    {
        echo 'password is weak please change the password';
    }
    else {
        echo 'strong pass';
    }
}
else{
    echo 'please fill the password';
}
}

?>

<form action="post.php" method="POST">
Password:<br>
<input type="password" name="password"><br><br>
<input type="submit" value="submit">
</action>