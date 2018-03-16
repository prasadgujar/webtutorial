<?php

$food = array('pasta'=>300,'franky'=>400,'vadapav'=>100,'panipuri'=>150,'pabhaji'=>700);

//echo $food[1];
//echo $food['pasta'];
//$food[5] = 'samosa';
print_r ($food);

$check = array('Healthy'=>array('vegetables','salad'),
               'Unhealthy'=>array('samosa','franky'));

    /*           echo'<br>';
echo $check['Healthy'][0];
echo '<br>';*/
               print_r ($check);


foreach($check as $element=> $inner_elememt)
{
   echo $element.'<br>';
   foreach ($inner_elememt as $item) {
       echo $item.'<br>';
   }
}
?>