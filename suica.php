<?php

echo 'Suicaにチャージします。金額に該当する該当する番号を入力して下さい。' . "\n";
echo '1: 1,000円' . "\n";
echo '2: 3,000円' . "\n";
echo '3: 5,000円' . "\n";
echo '番号: ';
$charge = fgets(STDIN);

if ($charge == 1) {
    $charge_yen = 1000;
} elseif($charge == 2) {
    $charge_yen = 3000;
} else {
    $charge_yen = 5000;
}

if ($charge == 1 || $charge == 2 || $charge == 3) {
    echo $charge_yen . '円チャージしました。' . "\n";
    $flag = true;
    for ($i=0; ; $i++) { 
        echo '商品の価格を入力して下さい。: ';
        $price = fgets(STDIN);
        $charge_yen = $charge_yen - $price;
        if ($charge_yen < 0) {
            $flag = false;
        }
        if ($flag) {
            echo '残高は' . $charge_yen . '円です。' . "\n";
        } else {
            echo 'チャージ金額を上回るため購入できません。' . "\n";
            echo '買い物を終了します。';
            break;
        }
    }
} else {
    echo '無効な番号です。処理を終了します。';
}