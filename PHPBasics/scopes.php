<?
$config = [
  'separator' => '_',
];

$fullName = function ($firstName, $lastName) use ($config) {
  return "{$firstName}{$config['separator']}{$lastName}";
};

echo $fullName('Alex', 'Garett');
