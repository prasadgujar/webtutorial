<?php

include 'header.php';

$script_name = $_SERVER['SCRIPT_NAME'];

echo $script_name;

if(isset($_Post['submit']))
{
    echo 'process 1';
}
?>