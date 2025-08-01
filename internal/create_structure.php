<?php

$ks = file_get_contents("setupkillswitch");
if ($ks != "1") {
    mkdir("../data/");
    file_put_contents("../data/codes.dat","");
    file_put_contents("../data/di.dat","");
    file_put_contents("../data/hr.dat","");
    file_put_contents("../data/si.dat","");
    file_put_contents("../data/staff.dat","");
    file_put_contents("../data/superviser.dat","");
    file_put_contents("../data/dev.dat","");
}