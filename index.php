<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
echo 'こんにちはみなさん';
?>
<?= '<p>ご機嫌いかがですか</p>'; ?>

<?php
$name = 'ケンシロウ';
$name = 'ラオウ';
echo $name;
?>

<?php
// 定数
define('NAME_HOKUTO', 'ケンシロウ');
echo NAME_HOKUTO;
echo '<br>';
echo __FILE__;
?>

<br>

<?php
$day = '今日は';
$weather = 'いい天気です';
echo $day . $weather;

$fruit = 'りんご';
echo "私の好きな果物は{$fruit}です。";
// echo "私の好きな果物は" . $fruit . "です。";

echo "\n";
echo "あいうえお";

echo "今日の18時から\"大特価タイムセール\"です";

?>
<br>
<?php
echo strlen('ハンバーグ');
echo '<br>';
echo mb_strlen('ハンバーグ');
echo '<br>';

echo str_replace('ケ','ペ','ケンシロウ');
?>
<br>
<?php
$pi = 3.14;
echo ceil($pi);//切り上げ
echo '<br>';
echo floor($pi);//切り捨て

?>
<br>
<?php
$ages = [20, 30, 40, 50];
$ages[2] = 45;

$ages[] = 60;
array_push($ages, 70, 80);

echo '<pre>';
print_r($ages);
echo '</pre>';

echo '<br>';

$hokuto = ['ケンシロウ', 'ラオウ', 'トキ'];
$nanto = ['レイ', 'ユダ', 'シン'];
$hokuto_nanto = array_merge($hokuto, $nanto);
print_r($hokuto_nanto);

echo '<br>';

echo count($ages);

?>

<br>
<?php
$nuts = [
  'almond' => 100,
  'hazel' => 150,
  'macadamia' => 200
];
echo $nuts['hazel'];
?>

<br>

<?php
$machines = [
  ['ファミリーコンピューター', '任天堂', 1983],
  ['メガドライブ', 'セガ', 1988],
  ['ネオジオ', 'SNK', 1990]
];

echo $machines[1][0] . ' - ' . $machines[1][1] . "({$machines[1][2]})";

$machines = [
  ['name' => 'ファミリーコンピューター', 'brand' => '任天堂', 'year' => 1983],
  ['name' => 'メガドライブ', 'brand' => 'セガ', 'year' => 1988],
  ['name' => 'ネオジオ', 'brand' => 'SNK', 'year' => 1990]
];

?>

</body>
</html>