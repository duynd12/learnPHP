<?php
include './regexName.php';
function check_regexEmail($regex, $param)
{
    if (!preg_match($regex, $param)) return false;
    else return true;
}
