<?php
$xml = simplexml_load_file('example.xml');
foreach ($xml->producer as $producer) {
    echo $producer->name.' is '.$producer->age.'<br>';

    foreach ($producer->show as $show) {
        # code...
        echo $show->showname.' on ' .$show->showdate.'<br>';

    }
    //echo $producer->show->showname.'<br>';
}
//echo $xml->producer[1]->name.$xml->producer[1]->age;
?>
