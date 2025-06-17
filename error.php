<?php

var_dump($_GET);

define("DB_NAME",'php');
define("DB_USER",'root');
define("DB_PASS",'123');

try{
  $pdo = new PDO('mysql:host=localhost;dbname=php','root','123');
}catch(PDOException $e){
  echo $e->getMessage();
  echo '<br>';
  echo $e->getCode();
  echo '<br>';
  echo $e->getTraceAsString();
}

echo '<br>';
echo 'FINAL';

echo "branch develop";