<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrucutra de control</title>
</head>
<body>
    <h1>Estrucutras de control</h1>
    
    <h2>Intruccion condicionales</h2>

    <?php
        $color = "rojo";

        if($color == "Rojo")
        {
            print("efectivamente, el color es rojo!");
        }
    ?>

    <h2>Instrucciones repetitivas</h2>
    <h3>While</h3>
    <?php
        $x = 18;
        while($x>0)
        {
            echo "<big>";
            print("Numero: ". $x);
            echo "<br>";
            echo "<br>";
            $x--;
        }
    ?>

    <h3>While</h3>
    <?php
        for($x=5; $x<=10; $x++)
        {
            echo "Numero; ". $x. "<br>";
        }
    ?>
</body>
</html>