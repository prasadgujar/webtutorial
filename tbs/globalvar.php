<?php
 echo $user_ip = $_SERVER['$REMOTE_ADDR'];

function echo_ip()
{
   global $user_ip; 
   $string  = 'your ips address is ' . $user_ip;
   echo $string;
}

echo_ip();
?>