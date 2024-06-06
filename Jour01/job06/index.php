<?php
for ($i = 1; $i <= 1337; $i++) {
    if($i > 0 && $i < 20){
        echo "<i>$i</i><br>";
    }else if ($i == 42){
        echo "La Plateforme<br>";
    }else if ($i >= 25 && $i <= 50){
        echo "<U><u>$i</u></U><br>";
    }else{
        echo $i . "<br>";
    }
}
?>