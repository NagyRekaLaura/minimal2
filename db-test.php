<?php

try {
    require __DIR__ . '/db.php';
    echo 'OK';
} catch (Throwable $e) {
    echo 'HIBA: ' . $e->getMessage();
}
