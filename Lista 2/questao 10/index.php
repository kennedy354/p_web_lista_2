<?php
$soma=0;
$a=0;
while($soma<=1000){
    $a=mt_rand(0, 100);
    $soma=$soma+$a;
    echo "$soma<br>";
}