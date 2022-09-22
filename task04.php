<?php 
function calc(string $operator, int $nbr1, int $nbr2) {
    $res = 0;

    switch ($operator) {
        case '+':
            $res = $nbr1 + $nbr2;
            break;
        case '-':
            $res = $nbr1 - $nbr2;
            break;
        case '*':
            $res = $nbr1 * $nbr2;
            break;
        case '%':
            $res = $nbr1 % $nbr2;
            break;
        case '/':
            if ($nbr2 == 0) {
                return "Cannot divide by 0";
            }
            $res = $nbr1 / $nbr2;
            break;
        default:
                return "Unknown operator";
            break;
    }
    return $res;
}
?>