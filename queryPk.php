<?php
$howMany = 1000000;
$dbPath = "./$howMany.sqlite";
$db = new SQLite3($dbPath);

$randId = rand(0, $howMany - 1);

$executionStartTime = microtime(true);

$res = $db->query("select * from cars where id=$randId");
while ($row = $res->fetchArray()) {
    echo "{$row['id']} {$row['name']} {$row['price']} \n";
}

$executionEndTime = microtime(true);
$seconds = $executionEndTime - $executionStartTime;
echo "This script took $seconds to execute.";
