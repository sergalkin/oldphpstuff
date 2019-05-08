<?
$firstName = 'Alex';
$lastName  = 'B';

function fullName($firstName, $lastName = null, $separator = ' ') {
  if($lastname === null) {
    return $firstName;
  }
  return "{$firstName}{$separator}{$lastName}";
};

echo fullName($firstName, '_');
