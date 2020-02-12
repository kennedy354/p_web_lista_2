<?php
//Como Passar variavel pela URL(http://localhost/exemplo/?num=valor)
$num = $_GET["num"];
$mult=0;
for($i=1;$i<=10;$i++){
    $mult=$i*$num;
    echo "$i X $num = $mult<br>";
}