<?php
$a=-10;
$b=-12;
$c=-13;

if ($a>0 and $b>0 and $c>0){
    echo "uchta son musbat";
}elseif ($a>0 and $b>0 and $c<0 or $a>0 and $b>0 and $c<0 or $a<0 and $b>0 and $c>0){
    echo "ikkita son musbat";
}elseif ($a<0 and $b<0 and $c>0 or $a>0 and $b<0 and $c<0 or $a<0 and $b>0 and $c<0){
    echo "bitta son musbat";
}else{
    echo "birortasi ham musbat emas";
}


