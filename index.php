<?php

$request = $_SERVER['REQUEST_URI'];
$file = require_once __DIR__ . '/routes/routes.php';
$filePath = route($request);

if ($filePath) {
    require_once __DIR__ . '/' . $filePath;
}