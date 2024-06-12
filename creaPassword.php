<?php

$num= $_GET["num"] ?? "VUOTO";
echo $num;
$p='';
function generaP($num,$p){
    for($i=1;$i<$num;$i++){
        $p= $p .'x';
    }
    return $p;
}

echo generaP($num,$p);
