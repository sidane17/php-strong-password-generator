<?php
$genera='disdbey48t23853beib833nf';

$num= $_GET["num"] ?? "VUOTO";
echo $num;

function generaP($num,$genera){
    $n=strlen($genera);
    $p='';
    for($i=0;$i<$num;$i++){
        
        $p.=$genera[(random_int(0,($n-1)))];

    }
    return $p;
}


//echo random_int(1,3);
echo $genera[2];
echo generaP($num,$genera);
