<?php

$video  = simplexml_load_file('gdata.youtube.com/feeds/api/videos/ILczf4lCvz8');

echo 'Title:<br>'.$video->title;

?>