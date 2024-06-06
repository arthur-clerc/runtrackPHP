<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour<br>";
    } else {
        echo "Bonsoir";
    }
}

bonjour(true);
bonjour(false);
?>
