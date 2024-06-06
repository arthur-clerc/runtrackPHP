<?php
function occurrences($str, $char) {
    $count = substr_count($str, $char);
    echo $count;
}

$str = "Bonjour";
$char = "o";

occurrences($str, $char);
?>
