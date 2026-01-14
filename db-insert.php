<?php

$db = require __DIR__ . '/db.php';

$data = json_decode(file_get_contents('php://input'), true);

$db->prepare('INSERT INTO todos (task) VALUES (?)')
   ->execute([$data['task']]);
