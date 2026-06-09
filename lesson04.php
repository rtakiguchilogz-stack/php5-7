<?php

$queue = [];

while (true) {
    echo "モード選択\n";
    echo "1: Enqueue\n";
    echo "2: Dequeue\n";
    echo "3: Front\n";
    echo "4: IsEmpty\n";
    echo "その他: 終了\n";

    $mode = trim(fgets(STDIN));

    if ($mode == 1) {

        echo "変数を入力: ";
        $data = trim(fgets(STDIN));

        array_push($queue, $data);

    } elseif ($mode == 2) {

        if (!empty($queue)) {
            echo array_shift($queue) . PHP_EOL;
        }

    } elseif ($mode == 3) {

        if (!empty($queue)) {
            echo $queue[0] . PHP_EOL;
        }

    } elseif ($mode == 4) {

        if (empty($queue)) {
            echo "empty" . PHP_EOL;
        } else {
            echo "not empty" . PHP_EOL;
        }

    } else {
        break;
    }
}