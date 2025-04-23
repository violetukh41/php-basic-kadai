<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<?php
// ソート関数の定義
function sort_2way($array, $order){
    if ($order) {
        echo '昇順にソートします。<br>';
        sort($array);  // 昇順
    } else {
        echo '降順にソートします。<br>';
        rsort($array); // 降順
    }

    foreach ($array as $num) {
        echo $num . '<br>';
    }
}

// 元の配列
$nums = [15, 4, 18, 23, 10];

// 昇順ソート
sort_2way($nums, TRUE);

// 降順ソート
sort_2way($nums, FALSE);
?>

</html>