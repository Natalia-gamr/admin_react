<?php

$htmlfiles = glob('../../*.html');

$responcse = [];

foreach ($htmlfiles as $file) {
    array_push($responcse, basename($file));
}

echo json_encode($responcse);