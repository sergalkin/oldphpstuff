<?
$weather = 'sunny';

$degrees = 30.5;

$status = "The current weather is $weather and it's $degrees degrees.<br>";
$status2 = "The current weather is $weather and it's {$degrees}° degrees<br>";
echo $status;
echo $status2;

$name = 'alex';

echo 'My name is ', $name;
