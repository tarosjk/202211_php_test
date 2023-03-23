<?php
// データベース接続
try {
  $dsn = 'mysql:host=localhost;dbname=pizza;charset=utf8';
  $user = 'pizzataro';
  $pass = '7td8@vrcaC]7wtcv';
  $option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];

  $db = new PDO($dsn,$user,$pass,$option);

} catch (PDOException $e) {
  echo 'データベースの接続でエラーが発生しました。' . $e->getMessage();
}