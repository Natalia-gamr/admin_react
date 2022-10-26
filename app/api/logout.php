<?php
session_start();

if ($_SESSION['auth'] == true) {
    $_SESSION['auth'] = false;
    unset($_SESSION['auth'] );
    session_destroy();
} else {
    header("HTTP/1.0 400 Bad Request");
}