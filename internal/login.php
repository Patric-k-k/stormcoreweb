<?php
session_start();
$allogins = file_get_contents("../../codes.txt");
$logins = explode("\n",$allogins);
$_SESSION["code"] = $_POST["code"];
if (in_array($_POST["code"],$logins)) {
    echo "1";
}