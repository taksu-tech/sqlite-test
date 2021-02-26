<?php
$howMany = 10000;
$db = new SQLite3("$howMany.sqlite");

$db->exec("CREATE TABLE cars(id INTEGER PRIMARY KEY, name TEXT, price INT)");

$executionStartTime = microtime(true);
for ($i = 0; $i < $howMany; $i++) {
    $randName = time();
    $randPrice = rand(100, 100000);
    $db->exec("insert into cars(name,price) values('$randName', $randPrice)");
}

$executionEndTime = microtime(true);
$seconds = $executionEndTime - $executionStartTime;
echo "This script took $seconds to execute.";
