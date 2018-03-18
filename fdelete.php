<?php
$filename = 'filename.txt';
if(unlink($filename))
{
    echo 'file is deleted';

}
else {
    echo 'oops there is an error while deleteing file.';
}
?>