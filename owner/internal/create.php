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
$cd = $_POST["cd"];
$dev = $_POST["dev"];
$di = $_POST["di"];
$exec = $_POST["exec"];
$hr = $_POST["hr"];
$si = $_POST["si"];
$staff = $_POST["staff"];
$superviser = $_POST["superviser"];
$wc = $_POST["wc"];
file_put_contents("../../data/codes.dat","\n" . $cd, FILE_APPEND);
if ($dev == "true") {
    file_put_contents("../../data/dev.dat","\n" . $cd, FILE_APPEND);
};
if ($di == "true") {
    file_put_contents("../../data/di.dat","\n" . $cd, FILE_APPEND);
};
if ($exec == "true") {
    file_put_contents("../../data/exec.dat","\n" . $cd, FILE_APPEND);
};
if ($hr == "true") {
    file_put_contents("../../data/hr.dat","\n" . $cd, FILE_APPEND);
};
if ($si == "true") {
    file_put_contents("../../data/si.dat","\n" . $cd, FILE_APPEND);
};
if ($staff == "true") {
    file_put_contents("../../data/staff.dat","\n" . $cd, FILE_APPEND);
};
if ($superviser == "true") {
    file_put_contents("../../data/superviser.dat","\n" . $cd, FILE_APPEND);
};
if ($wc == "true") {
    file_put_contents("../../data/wc.dat","\n" . $cd, FILE_APPEND);
};
echo "success?";