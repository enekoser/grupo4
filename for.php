<html>
<head>
<title>for</title>
</head>

<body>

<?php
 
    for($n=2; $n<=10; $n= $n+2){
  
         echo "$n </br>";
    }
  
?>

<br/>

<?php
    for ($num=2; $num<=10;  $num%2 == 0) {
        echo "$num<br/>";
        $num = $num + 2;
    }
   
?>

</body>
</html> 
