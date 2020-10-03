<?php
$redis = new Redis();
$redis->connect('redis');
$redis->select(1);

$latestTimeStamp = time();
$count = 10;

for ($i=$latestTimeStamp; $i>$latestTimeStamp-$count;$i--) {
    echo nl2br(sprintf("K:%s______%d", $i, $redis->get((string)$i)).PHP_EOL);
}
$redis->close();
