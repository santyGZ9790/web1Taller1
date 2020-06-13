<?php

// $ANTYAGO
// SUMA

$num1=15;
$num2=5;
$suma=$num1+$num2;   
$resta=$num1-$num2;
$multipicacion=$num1*$num2;
$division=$num1/$num2;

echo("La suma de ".$num1."+".$num2."=".$suma);
echo("<br>");
echo("La resta de ".$num1."-".$num2."=".$resta);
echo("<br>");
echo("La multiplicacion de ".$num1."x".$num2."=".$multipicacion);
echo("<br>");
echo("La division de ".$num1."/".$num2."=".$division);
echo("<br>");



// PUNTO #2
echo("<br>");
$peso=70;
$altura= 2.00;
$imc=$peso/($altura*$altura);
if($imc<=18.4){
    echo("insuficiencia de peso");
} else if($imc<=24.9){
    echo("peso normal");
}else if($imc<=29.9){
    echo("sobrepeso");
}else if($imc<=34.9){
    echo("obesidad 1");
}else if($imc<=39.9){
    echo("obesidad 2");
}else{
    echo("obesidad 3");
}
echo("<br>");


// PUNTO #3

echo("<br>");

$cant=5;
$valor_par=150000;
$total_compra=$cant*$valor_par;
$desc=0;
$val_neto;

if($cant==3){
    $desc=$total_compra*0.10;
} else if($cant >3 && $cant <=5){
    $desc=$total_compra*0.20;
}else if($cant>5){
    $desc=$total_compra*0.40;
}
$val_neto=$total_compra-$desc;
echo("el valor total de la compra de ".$cant." pares es $".$val_neto);
echo("<br>");


//PUNTO#4
echo("<br>");
$hrs_laboradas=36;
$salarios;
$hrs_extras=0;

if($hrs_laboradas<=40){
    $salarios=$hrs_laboradas*20000;
}else {
    $hrs_extras=$hrs_laboradas-40;
    $salarios=40*20000+$hrs_extras*250000;
}
echo("el salario semanal es $".$salarios );
echo("<br>");



//PUNTO #5
echo("<br>");
$salpicon=array("dulce1"=>"banano","dulce2"=>"manzana","dulce3"=>"durazno","acido1"=>"piña","acido2"=>"naranja","acido3"=>"lulo");

echo("<br>");

foreach( $salpicon as $clave=>$valor){
    echo($clave.": ".$valor);
    echo("<br>");
}




?>