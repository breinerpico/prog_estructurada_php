<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones manipulacion de cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>

    <h2>Funcion substr()</h2>
    <?php
    $cadena = "Hola, mundo!";
    $subcadena = substr($cadena, 7, 5); // Extrae "mundo"
    echo $subcadena;
    ?>
    
    <h2>Funcion ord()</h2>
    <?php
    $caracter = "A";
    $valorASCII = ord($caracter); // Devuelve 65
    echo $valorASCII;
    ?>

    <h2>Funcion printf()</h2>
    <?php
    $nombre = "Juan";
    $edad = 25;
    printf("Mi nombre es %s y tengo %d años.", $nombre, $edad);
    
    ?>

    <h2>Funcion sprintf()</h2>
    <?php
    $nombre = "Ana";
    $edad = 30;
    $cadenaFormateada = sprintf("Mi nombre es %s y tengo %d años.", $nombre, $edad);
    echo $cadenaFormateada;
    
    ?>

    <h2>Funcion strtolower()</h2>
    <?php
    $cadena = "HOLA MUNDO!";
    $cadenaMinuscula = strtolower($cadena); // Devuelve "hola mundo!"
    echo $cadenaMinuscula;
    
    ?>

    <h2>Funcion strtoupper()</h2>
    <?php
    $cadena = "hola mundo!";
    $cadenaMayuscula = strtoupper($cadena); // Devuelve "HOLA MUNDO!"
    echo $cadenaMayuscula;
    
    ?>

    <h2>Función preg_match() (equivalente a ereg)</h2>
    <?php
    $cadena = "Hola123";
    if (preg_match("/[0-9]/", $cadena)) {
         echo "La cadena contiene números.";
                }
    
    ?>
    
    <h2>Función preg_match() con 'i' (equivalente a eregi)</h2>
    <?php
    $cadena = "Hola123";
    if (preg_match("/[0-9]/i", $cadena)) {
        echo "La cadena contiene números.";
    }
    
    ?>

    
</body>
</html>