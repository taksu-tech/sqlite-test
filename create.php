<?php

// https: //www.php.net/manual/en/book.sqlite3.php

$ver = SQLite3::version();

$db = new SQLite3('test.db');
$version = $db->querySingle('SELECT SQLITE_VERSION()');

// create table
$db->exec("CREATE TABLE cars(id INTEGER PRIMARY KEY, name TEXT, price INT)");

return;
