<?php

session_start();

if(isset($_SESSION['username'])&&issset($_SESSION['age']))
{
    echo 'welcome '.$_SESSION['name'].'. you are'.$_SESSION['age'];
}
else {
    echo 'please log in..';
}
?>