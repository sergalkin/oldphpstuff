<?
// $names = ['alex', 'bill', 'dale'];
//
// foreach ($names as $key => $name) {
//   echo 'key:' . $key . ' name:'. $name . '<br>';
// }

$topics = [
  [
    'id' => 1,
    'title' => 'Best way',
    'posts' => [
      ['body' => 'Practice'],
      ['body' => 'Practice2']
    ]
  ],
  [
    'id' => 2,
    'title' => 'How do way',
    'posts' => [
      ['body' => 'Just']
    ]
  ],
];

foreach ($topics as $topic) {
  echo '<h1>' .$topic['title'] .'</h1>';
  foreach ($topic['posts'] as $post) {
    echo '<p>' .$post['body'] . '</p>';
  }
}
