<?php
$item_datas = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

//  配列$user_namesのインデックスと値を1つずつ順番に出力する
foreach ($item_datas as $index => $value) {
  echo "{$index}：{$value}<br>";
}
?>