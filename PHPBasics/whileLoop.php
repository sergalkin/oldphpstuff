<?
// $currentNumber = 1;
// $endAt = 10;
// $inc = 1;
//
// while ($currentNumber <= $endAt){
//     echo $currentNumber .'<br>';
//     $currentNumber += $inc;
// };

ini_set('display_errors', 'On');
$numberIwant = 3;

while (($diceRoll = rand(1,6)) !== $numberIwant) {
  echo "U rolled a {$diceRoll}, we need a {$numberIwant}! <br>";
}

echo "Yep <br>";

do {
  echo 'This will run atleast once';
} while (false);
