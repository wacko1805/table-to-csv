<?php
$url = 'http://google.com/dhasjkdas/sadsdds/sdda/sdads.html';
$parse = parse_url($url);
echo $parse['host']; // prints 'google.com'
?>