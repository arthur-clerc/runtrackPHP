<?php
function toLeetSpeak($str) {
    $leetSpeak = array(
        'a' => '4',
        'e' => '3',
        'l' => '1',
        'o' => '0',
        's' => '5',
        't' => '7'
    );

    $leetStr = strtr($str, $leetSpeak);
    echo $leetStr;
}

$str = "Hello World!";
toLeetSpeak($str);
?>