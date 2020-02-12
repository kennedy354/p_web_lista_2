<?php
//Como Passar variavel pela URL(http://localhost/exemplo/?max=valor)
$max = $_GET["max"];
$soma=0;
for($i=0;$i<=$max;$i++){

$soma=$soma+$i;

}
echo"Soma de 0 até $max = $soma<br>";