<?php
$requestUri = $_SERVER['REQUEST_URI'];
$allowedFiles = ['php','ico'];
if (in_array(explode(".",$requestUri)[1], $allowedFiles) or $requestUri == "/") {
    return false;
} else {
    header("HTTP/1.0 403 Forbidden");
    echo "Access denied.";
    exit;
}
