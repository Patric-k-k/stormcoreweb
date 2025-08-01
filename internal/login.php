<?php session_start();
$allogins = file_get_contents("../data/codes.dat");
$logins = explode("\n",$allogins);
#$_SESSION["code"] = $_POST["code"]; 
setcookie("code",$_POST["code"], time() + (86400 * 30), "/");
if (in_array($_POST["code"],$logins)) {
    echo "1";
}