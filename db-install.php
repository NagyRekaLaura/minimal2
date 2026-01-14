<?php

$db = require __DIR__ . '/db.php';
$db->exec(file_get_contents(__DIR__ . '/dbinstall.sql'));

echo 'OK';
