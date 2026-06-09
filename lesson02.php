<?php

$stack = [];

while (true) {
    echo "モード選択\n";
    echo "1: Push\n";
    echo "2: Pop\n";
    echo "3: Peek\n";
    echo "4: IsEmpty\n";
    echo "その他: 終了\n";

    $mode = trim(fgets(STDIN));

    if ($mode == 1) {

        echo "変数を入力: ";
        $data = trim(fgets(STDIN));

        array_push($stack, $data);

    } elseif ($mode == 2) {

        if (!empty($stack)) {
            echo array_pop($stack) . PHP_EOL;
        }

    } elseif ($mode == 3) {

        if (!empty($stack)) {
            echo end($stack) . PHP_EOL;
        }

    } elseif ($mode == 4) {

        if (empty($stack)) {
            echo "empty" . PHP_EOL;
        } else {
            echo "not empty" . PHP_EOL;
        }

    } else {
        break;
    }
}