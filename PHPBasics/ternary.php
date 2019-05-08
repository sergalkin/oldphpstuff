<?

// $page = 1;
// if(isset($_GET['page'])) {
//   $page = $_GET['page'];
// }
// echo $page;

// $page = isset($_GET['page']) ? $_GET['page'] : 1;
// echo $page;

#PHP7+
$page = $_GET['page'] ?? 1;
echo $page;

$balance = 0;
$availableBalance = $balance ?: ' zero';

echo 'ur balance' . $availableBalance;

function test(): void {
  $a = 1+1;
};
test();
