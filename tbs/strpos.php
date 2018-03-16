<?php
  $offset = 0;
  $find = 'is';
  $slen = strlen($find);
   $string = 'this is a string and it is an example';
   
   //echo strpos($string,$find,10);
   
   while($spos = strpos($string,$find,$offset))
   {
      echo '<strong> '.$find.' </strong> find at '. $spos.'<br>';
      $offset  = $spos + $slen;
   }
?>