<?php
 //require 'config.php';
 require 'getip.php';
 //echo $ip_address;
  
  foreach ($ip_blocked as $ips) {
      //echo $ips.'<br>';
      if($ips == $ip_address)
      {
          //echo 'yoyo';
          die();
      }
  }

?>

<h1> welcome </h1>