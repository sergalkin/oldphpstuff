<?

$firstName = 'Alex';
$lastName  = 'B';

function fullName($firstName, $lastName, $separator = ' ') {
  return "{$firstName}{$separator}{$lastName}";
};

echo fullName($firstName, $lastName, '_');
