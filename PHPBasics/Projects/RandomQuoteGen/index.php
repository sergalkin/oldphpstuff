<?php

$quotes = [
  [
    'author' => 'Antoine De Saint',
    'text' => 'A designer knows he has achieved perfection not when ther is nothing to left to add, but when there is nothing left to take away.'
  ],
  [
    'author' => 'Benjamin Franklin',
    'text' => 'An investment in knowledge always pays the best interest.'
  ],
  [
    'author' => 'John Updike',
    'text' => 'Dreams come true. Without that possibility, nature would not incite us to have them.'
  ],
  [
    'author' => 'Socrates',
    'text' => 'The life whic is unexamined is not worth living.'
  ],
  [
    'author' => 'Aristotle',
    'text' => 'We cannot learn without pain.'
  ],
];

$quote1 = $quotes[rand(0, count($quotes) - 1)];
$quote2 = $quotes[array_rand($quotes)];

if (1) {
    echo '1'
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random quotes</title>
  </head>
  <body>
      <blockquote>
          <h2>&ldquo;<?=$quote1['text']?>&rdquo;</h2>
          <strong>- <?=$quote1['author']?></strong>
      </blockquote>
      <blockquote>
          <h2>&ldquo;<?=$quote2['text']?>&rdquo;</h2>
          <strong>- <?=$quote2['author']?></strong>
      </blockquote>
  </body>
</html>
