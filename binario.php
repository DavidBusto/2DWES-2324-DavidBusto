<HTML>
<HEAD> <TITLE> Binario</TITLE> </HEAD>

<BODY>
    <h1>Binario</h1>
<?php

$op1 = $_POST["op1"];
$binario = decbin($op1);

echo "Número ingresado: <input type='text' value='$op1' readonly><br><br><br>";

echo "Número en binario: <input type='text' value='$binario' readonly><br>";                       
?>
</BODY>
</HTML>
