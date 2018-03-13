<?php
$config=  require '../config.ini.php';
$array= array (
  'DEFAULT_THEME' => 'default',
  'URL_MODEL' => 1,
);

return array_merge($config,$array);
?>