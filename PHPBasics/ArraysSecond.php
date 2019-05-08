<?
// $people = [
//   'alex' => 26,
//   'billy' => 21
// ];
//
// var_dump($people);
//
// $users = [
//     ['username' => 'alex'],
//     ['username' => 'billy']
// ];
//
// var_dump($users);
// echo $users[0]['username']."<br/>";

$users2 = [
  [
    'username' => 'Alex',
    'email' => 'test@ya.ru',
    'likes' => ['cats', 'food']
  ],
  [
    'username' => 'Bob',
    'email' => 'be@ty.ru',
    'likes' => ['books', 'cats']
  ],
  [
    'username' => 'Beb',
    'email' => 'test@ya.ru',
    'likes' => ['reading', 'food']
  ]
];

// echo $users2[0]['email']."<br/>";
//
// echo $users2[0]['likes'][0];
// echo '<pre>' , var_dump($users2) , '</pre>';

foreach ($users2 as $user) {
  echo $user['username'].'<br>';
}
