<html>
<head>
<title>ejercicio</title>
</head>
<body>


<?php

    $numero = 2;
    while ($numero <= 10) {
        echo "el numero es: $numero<br/>";
        $numero = $numero + 2;
    }
?>

<br/>

<?php
 
    for($n=2; $n<=10; $n= $n+2){
  
         echo "$n </br>";
    }
  
?>

<br/>

<?php

    $num = 0;
    while ($num <= 10) {
        if ($num % 2 == 0) {
            echo "el numero es: $num<br/>";
        }
        
        $num = $num + 2;
    }
?>

</body>
</html>