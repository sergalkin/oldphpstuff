<?
require_once 'directoryReader.php';

$images = directoryReader('images');

if(!$images) {
  die('Could not load files');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
  </head>
  <body>
    <?php foreach ($images as $image):?>
        <img src="<?=$image?>" alt="img">
    <?php endforeach;?>
  </body>
</html>
