<?
// $dayOfWeek = 1;
//
// if ($dayOfWeek == 1) {
//   echo 'Yep'.$dayOfWeek;
// } elseif ($dayOfWeek == 2) {
//   echo 'Yep'.$dayOfWeek;
// }  elseif ($dayOfWeek == 3) {
//   echo 'Yep'.$dayOfWeek;
// }  elseif ($dayOfWeek == 4) {
//   echo 'Yep'.$dayOfWeek;
// }  elseif ($dayOfWeek == 5) {
//   echo 'Yep'.$dayOfWeek;
// }  elseif ($dayOfWeek == 6) {
//   echo 'Yep'.$dayOfWeek;
// }  elseif ($dayOfWeek == 7) {
//   echo 'Yep'.$dayOfWeek;
// } else {
//   echo 'Nope';
// }

$dayOfWeek = 2;

$daysOfWeek = [
  1 => 'Monday<br>',
  2 => 'Tuesday<br>',
  3 => 'Wednesday<br>'
];
if (in_array($dayOfWeek,array_keys($daysOfWeek))) {
  echo $daysOfWeek[$dayOfWeek];
} else {
  echo 'Nope';
}

$name = 'Alexander James Garrett';

if(!$name) {
  return;
}

echo 'Your name is ' . $name . '.';
if (strlen($name) > 10) {
  echo 'You have long name';
}
