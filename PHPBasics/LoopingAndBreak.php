<?

// $users = [
//   ['username' => 'alex'],
//   ['username' => 'bily'],
//   ['username' => 'dale'],
//   ['username' => 'mar'],
//   ['username' => 'vel'],
//   ['username' => 'key'],
//   ['username' => 'josh'],
// ];
//
// $toFind = 'dale';
// $result = null;
//
// foreach ($users as $user) {
//   if($user['username'] == $toFind) {
//     $result = $user;
//     break;
//   }
// }
//
//
// $toSkip = 'dale';
//
// foreach ($users as $user) {
//   if($user['username'] == $toSkip){
//     continue;
//   }
//   echo $user['username'], '<br>';
// }


$users = [
  [
    'username' => 'alex',
    'likes' => ['cats','food']
  ],
  [
    'username' => 'billy',
    'likes' => ['code','cats', 'food']
  ],
  [
    'username' => 'dale',
    'likes' => ['code','cats', 'music']
  ],
];
$toFind = 'code';
$found  = null;

foreach ($users as $user) {
  foreach ($user['likes'] as $like) {
    if($like === $toFind) {
      $found = $user;
      break 2;
    };
  }
}

echo '<pre>', var_dump($found) , '</pre>';
