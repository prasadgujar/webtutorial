<?php
$string = '           this is an example string         ';
$count = str_word_count($string,0);
//$count = str_word_count($string,1);
echo $count;
//print_r ($count);

$strings  = 'abcdefkiskmclsljarwk12345689';
$string_shuffled = str_shuffle($strings);
$half = substr($string_shuffled,0,strlen($strings)/2);
echo $string_shuffled;
echo '<br>';
echo $half;
echo '<br>';
$rev  = strrev($strings);
echo $rev;

$s1 = 'this is mh eassay i m going to talking about php';
$s2 = 'this is mh eassay i will be going to talking about java';
echo '<br>';
similar_text($s1,$s2,$res);
echo 'the similarity of two string'.$res;
echo '<br>';
echo $string;
//echo strlen($s1);
echo '<br>';
$trimmed = ltrim($string);
echo $trimmed;
echo '<br>';

$ss = 'this is a <img src="image.jpg"> string';
$string_slashes = htmlentities(addslashes($ss));
echo $string_slashes;
?>