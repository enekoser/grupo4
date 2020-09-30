<html>
<head>
<title>Condicionales</title>
</head>

<body>
<?php
    $numero1 = 4;
    $numero2 = 3;
    if ($numero1 < $numero2) {
        echo "El primer numero es menor que el segundo<br/>";
    }
    else {
        echo "El primer numero es mayor o igual que el segundo<br/>";
    }

    $numero3 = 5;
    $numero4 = 7;
    if (($numero3 + 2) == $numero4) {
        echo "numero3 es dos unidades menor que numero4<br/>";
    }
    if ($numero3 != $numero4) {
        echo "Los numeros son distintos<br/>";
    }

    // ! --> es el operador de negacion (solo para booleanos)
?>
</body>
</html> 

