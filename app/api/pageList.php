<?php
session_start();
if($_SESSION['auth'] != true ) {
    header("HTTP/1.0 403 Forbidden");
    die;
}

$htmlfiles = glob('../../*.html');

$responcse = [];

foreach ($htmlfiles as $file) {
    array_push($responcse, basename($file));
}

echo json_encode($responcse);