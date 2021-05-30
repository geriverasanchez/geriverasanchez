<?php

/**
*Devuelve el doble de un número introducido
*
*@author Gema Maria Rivera
*@version 2.2
*@param string $núm parámetro introducido
*@return string $núm Devolvemos el doble del número
*@acces private
*@param string $claveprivada contraseña que no se ve
*/
function doble ($núm){
echo "doble numero";
$núm = "doble numero".($núm);
return $núm;
}

/**
*Devuelve un número multiplicando la edad por 3
*
*@author Gema Maria Rivera
*@version 2.2
*@param string $edad
*@return string $puntos devolvemos un número
*@acces private
*@param string $claveprivada contraseña que no se ve
*/
function numero multiplicando por 3 ($edad){  
echo "Tu edad es".$edad;
$puntos = $edad*3;
return $puntos;
}

/**
*Aquí empezamos a invocar funciones
*@access public
*/
echo "Tu edad es".funcionedad(30);
echo "Doble numero es:".funciondoblenumero("10");
?>

