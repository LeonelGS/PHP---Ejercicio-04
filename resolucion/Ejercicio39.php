<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trabajo Practico N° 2</title> 
  </head>    
 <?php 
   $altura = $_GET ["altura"];
   if($altura < 0){
    echo " No es posible hacer el calculo con numero negativo.";
   }  else {
    $formula = sqrt(($altura * 2)/9.81);
    $formula = round($formula,2);
   echo "<b>Resolucion de Ejercicio N 39</b><br>";
   echo "<br>";
   echo " El tiempo que tardara el objeto en caer desde una altura de $altura metros es: $formula segundos.";
   }
 ?>
<html>