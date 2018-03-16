<?php
ob_start();
?>
<h1> this is header</h1>
<?php
//header();

$redirect_page = 'http://google.co.in';
$redirect  = true;

if($redirect==true){
header('Location: '.$redirect_page);
}
ob_end_clean();
?>