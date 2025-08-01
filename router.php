<?php
$requestUri = $_SERVER['REQUEST_URI'];
$allowedFiles = ['php','ico'];
if (in_array(explode("?",explode(".",$requestUri)[1])[0], $allowedFiles) or $requestUri == "/" or explode("?",$requestUri)[0] == "/") {
    return false;
} else {
    header("HTTP/1.0 403 Forbidden");
    echo "Access denied.";
    exit;
}
