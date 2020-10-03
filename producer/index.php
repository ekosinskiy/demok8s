<?php
while (true) {
    try {
        $redis = new Redis();
        $redis->connect('redis');
        $redis->select(1);
        break;
    } catch (Throwable $e) {
        echo "Cannot connect to redis\n";
        sleep(10);
    }
}


while(true) {
    sleep(1);
    $key = (string) time();
    $value = mt_rand(10,20);
    $redis->incr($key, $value);
    echo "set value = $value".PHP_EOL;
}

$redis->close();
