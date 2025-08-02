<?php
$code = htmlspecialchars_decode($_POST["code"]);
$allogins = file_get_contents("../../data/codes.dat");
$logins = explode("\n",$allogins);
if (in_array($code,$logins)) {} else {
    echo "away go";
    exit(500);
}
$allogins = file_get_contents("../../data/exec.dat");
$logins = explode("\n",$allogins);
if (in_array($code,$logins)) {} else {
    echo "away go";
    exit(500);
}

$c = $_POST["content"];
$p = $_POST["page"];

file_put_contents("../books/" . $p . "/data.md", $c);

echo "success?";