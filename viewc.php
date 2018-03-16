<?php
echo $_COOKIE['username'];
if(isset($_COOKIE['username']))
{echo $_COOKIE['username'];}
else {
    echo 'cookie expired';
}

?>