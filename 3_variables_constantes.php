<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y Constantes en PHP</title>
</head>
<body>
    <h1>Variables y constantes en PHP</h1>
    <?php
        // Las variables se representan enteponiendo el simbolo $ a la palabra que se usa como variable.
        // PHP es sensitive case
        // Las variables no pueden empezar con un número 
        // En PHP no es necesario especificar el tipo de variables, pero si se debe saber cuanto utilizar las comillas, para el caso de variables tipo cadena o string.
        
        // Asignamos a la variables el valor 5
        $a= 5;

        // Asignamos a la variable b el valor 7 como cadena.
        $b="7";

        echo "<h2>VAriables</h2>";

        // Mostrar el valor de la variable a
        echo ($a);

        echo "<br>";

         // Mostrar el valor de la variable b
         echo ($b);

         echo "<br>";

         echo "<h2>Variables</h2>";

         /*El valor de una constante no cambia o se mantiene fijo durante la ejecucion de una pagina */

         /*La forma d definir las constantes en PHP, es mediante el uso de la instruccion define */
        
         // Creamos una constante llamada capital_colombia, cuyo valor es Bogota
         define(constant_name:"capital_colombia",value:"bogota");
    ?>
</body>
</html>