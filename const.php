<?php
include './regexName.php';
function check_regex($regex, $param)
{
    if (!preg_match($regex, $param)) return false;
    else return true;
}
