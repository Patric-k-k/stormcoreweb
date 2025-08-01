<?php
session_start();
$allogins = file_get_contents("./data/codes.dat");
$logins = explode("\n",$allogins);
if (in_array($_SESSION['code'],$logins)) {} else {
    echo "bye idiot <script>window.location.replace('/')</script>";
}
?>