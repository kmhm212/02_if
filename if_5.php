<?php

// $numという変数に正の整数を入力し、
// その整数が素数であれば「素数です」
// 素数でない時は「素数ではありません」
// と出力するプログラムを書いてください。

$num = 1;
$half = $num / 2;
$flag = true;

for ($i = 2; $i < $half; $i++) {
    if ($num % $i == 0) {
        $flag = false;
        break;
    }
}
if ($flag && $num >= 2) {
    echo $num . 'は素数です';
} else {
    echo $num . 'は素数ではありません';
}