<?php
/**
*Devuelve la suma de dos números
*
*@author Jesus Gandolfo Sánchez
*@version 1.1
*@param integer $num1 Primer número
*@param integer $num2 Segundo número
*@return integer $resultado Devuelve la suma de los números
*{@internal Anotación solo para desarrolladores}
*@access public
*/
   function sumar($num1, $num2){
      	$resultado = $num1 + $num2;
        return $resultado;
   }
/**
*Devuelve la multiplicación de dos números
*@author Jesus Gandolfo Sánchez
*@version 1.1
*@param integer $num1 primer número de la multiplicación
*@param integer $num2 segundo número de la multiplicación
*@return integer $resultado Devuelve la multiplicación de dos números
*{@internal Anotación solo para desarrolladores}
*@access public
*/
   function multiplicar ( $num1, $num2 ) {
	$resultado=$num1 * $num2;
	return $resultado;
   }

   $resultado_de_suma = sumar(20, 7);
   echo 'La suma de 20 +7 es: '. $resultado_de_suma;
   echo '<br />';
   $resultado = multiplicar (2, 9 ) ;
   echo'La multiplicación de 2*9 es: '. $resultado;	
?>
