<?php
function calcule($firstNumber, $stringOperation, $secondNumber) {
    switch ($stringOperation) {
        case '+':
            return $firstNumber + $secondNumber;
        case '-':
            return $firstNumber - $secondNumber;
        case '*':
            return $firstNumber * $secondNumber;
        case '/':
            return $firstNumber / $secondNumber;
        case '%':
            return $firstNumber % $secondNumber;
        default:
            return "Opération non valide";
    }
}

$addition = calcule(13, "+", 23);
echo $addition;
?>