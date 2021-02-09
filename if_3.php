<?php

// $score という変数を用意して その値が
// 60以上なら「合格です」
// 30以上60未満なら「追試です」
// 30未満なら「不合格です」

$score = 70;

if ($score >= 60) {
    echo '合格';
} elseif ($score < 30) {
    echo '不合格';
} else {
    echo '追試';
}
echo 'です';