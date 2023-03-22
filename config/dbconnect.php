<?php
// データベース接続
try {
  $dsn = 'mysql:host=localhost;dbname=pizzas;charset=utf8';
  $user = 'pizzataro';
  $pass = '(OgjoIqM]pSU7ZO-';
  $option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];

  $db = new PDO($dsn,$user,$pass,$option);

} catch (PDOException $e) {
  echo 'データベースの接続でエラーが発生しました。' . $e->getMessage();
}