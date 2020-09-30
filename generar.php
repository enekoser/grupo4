<html>
<head>
<title>Condicionales</title>
</head>

<body>
<?php
	$aleatorio = mt_rand(-5, 50);
	if ($aleatorio >= 0 && $aleatorio < 5) {
		echo "Has suspendido";
	} else if ($aleatorio < 7) {
	//MENOS EFICIENTE: } else if ($aleatorio >= 5 && $aleatorio < 7) {
		echo "Not bad";
	} else if ($aleatorio <= 10) {
		echo "Oso ondo";
	} else {
		echo "ERROR: Nota no v&aacute;lida";
	}
?>
</body>
</html> 
