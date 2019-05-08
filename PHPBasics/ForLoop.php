<?
$totalItems = 210;
$itemsPerPage = 25;

$pageCount = ceil($totalItems/$itemsPerPage);

for ($i = 1; $i <= $pageCount; $i++) {
  echo '<a href="?page='. $i . '">' . $i . '</a> ';
}

echo '<br>';

$names = ['alex', 'billy', 'dale'];

for ($i = 0; $i < count($names); $i++) {
  echo $names[$i] . '<br>';
}
