<?
$weather = 'sunny';
$color =  null;

switch (true) {
  case $weather == 'sunny':
    $color = 'blue';
    break;

  case $weather == 'cloudy':
    $color = 'grey';
    break;
}
echo $color;
