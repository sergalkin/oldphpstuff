<?
ini_set('display_errors', 'On');


// function add(array $numbers) {
//   $total = 0;
//
//   foreach ($numbers as $number) {
//     $total += $number;
//   }
//   return $total;
// };
//
// $numbers = [5, 10, 10];
//
// echo add($numbers);

//
// function add() {
//   $total = 0;
//   foreach (func_get_args() as $number) {
//     if(!is_numeric($number)) {
//       continue;
//     }
//     $total += $number;
//   }
//   return $total;
// }
// echo add(5,10,10, 'alex');


function add() {
  return array_sum(func_get_args());
}
echo add(5,10,10);
