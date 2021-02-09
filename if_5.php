<?php

// $numという変数に正の整数を入力し、
// その整数が素数であれば「素数です」
// 素数でない時は「素数ではありません」
// と出力するプログラムを書いてください。

$num = 1000001;

echo $num . 'は素数で';

if ($num >= 2) {
    for ($i = 2; $i <= ($num / 2) +1 ; $i++) {
        if ($i > $num / 2) {
            echo 'す';
            break;
        } elseif ($num % $i == 0) {
            echo 'はありません';
            break;
        } else {
            continue;
        }
    }
} else {
    echo 'はありません';
}