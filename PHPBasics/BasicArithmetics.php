<?php

$totalLessons = 30;
$completed = 7;

$perc = number_format(($completed / $totalLessons) * 100);

echo $perc.'<br>';

$a = 10;
$b = 7;

echo $a % $b;

$rows = 10;

for ($row = 1; $row <= $rows; $row++) {
  if($row % 2 == 0) {
    echo 'Even';
  } else {
    echo 'Odd';
  }
};

$c = 10;

echo '<br>'.$c ** 3;
