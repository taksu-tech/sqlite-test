<?php
$howMany = 1000000;
$dbPath = "./$howMany.sqlite";
$db = new SQLite3($dbPath);

$executionStartTime = microtime(true);

$res = $db->query("select count(*) from cars where price > 50000");
$row = $res->fetchArray();
echo "Found " . $row[0] . " rows.\n";
// while ($row = $res->fetchArray()) {
//     echo "{$row['id']} {$row['name']} {$row['price']} \n";
// }

$executionEndTime = microtime(true);
$seconds = $executionEndTime - $executionStartTime;
echo "This script took $seconds to execute.";
