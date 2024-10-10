<?php
// Definir dos variables con números
$num1 = 10;  // Puedes cambiar el valor aquí, por ejemplo: $num1 = 25;
$num2 = 10;  // Puedes cambiar el valor aquí, por ejemplo: $num2 = 25;

// Usar el operador nave espacial (<=>) para comparar los números
$resultado = $num1 <=> $num2;

// Estructura switch para mostrar el resultado
switch ($resultado) {
    case 1:
        echo "El número mayor es: $num1";
        break;
    case -1:
        echo "El número mayor es: $num2";
        break;
    case 0:
        echo "Los números son iguales";
        break;
}
?>
