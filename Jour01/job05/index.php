<?php
for ($i = 1; $i <= 1337; $i++) {
    if($i != 26 && $i != 37 && $i != 88 && $i != 1111){
        echo $i . "<br>";
    }
}

// OU

$excluded_values = [26, 37, 88, 1111];

for ($i = 1; $i <= 1337; $i++) {
    if (!in_array($i, $excluded_values)) {
        echo $i . "<br>";
    }
}
?>