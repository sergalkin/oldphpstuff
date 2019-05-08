<?php
$url = 'http://www.google.com:9000/test/te?page=5';

$parsedUrl = parse_url($url);
echo '<pre>' , print_r($parsedUrl, true) , '</pre>';
