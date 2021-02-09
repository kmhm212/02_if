<?php

// $score_math と $scrore_english という変数を用意して、
// 両方の値が60以上の時には「合格」
// どちらか一方の値が50以上の時には「再試験」
// どちらの値も50未満の時には「不合格」
// と表示するプログラムを書いてください。

$score_math = 80;
$score_english = 75;

if ($score_math >= 60 && $score_english >= 60) {
    echo '合格';
} elseif ($score_math < 50 && $score_english < 50) {
    echo '不合格';
} else {
    echo '再試験';
}