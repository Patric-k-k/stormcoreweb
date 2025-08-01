<?php

$ks = file_get_contents("setupkillswitch");
if ($ks != "1") {
    mkdir("../data/");
    file_put_contents("../data/codes.dat","");
}