<?php
$a=10;
$b=2;
$operator = "";

switch ($operator) {
    case "+":
        echo $a+$b;
        break;
    case "-":
        echo $a-$b;
        break;
    case "/":
        echo $a/$b;
        break;
    case "*":
        echo $a*$b;
        break;
    default: echo "+  -  *  / belgilaridan birini tanlang" ;
}
?>