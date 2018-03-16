<?php

function has_space($string)
{
  if(preg_match('/ /',$string))
  {
      return true;
  }
  else {
      return false;
  }
}

$string = 'systemout mylifesucks';

if(has_space($string))
{
    echo 'has at least one space';
}
else {
    echo 'there is no space';
}
?>