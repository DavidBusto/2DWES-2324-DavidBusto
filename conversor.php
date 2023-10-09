<HTML>
<HEAD> <TITLE> Conversor</TITLE> </HEAD>

<BODY>
    <h1>Conversor</h1>
<?php

$op1 = $_POST["op1"];
$dec = decbin($op1);
$oct = decOct($op1);
$hexa = decHex($op1);

if($_POST["conversion"] === "Binario"){
echo "El numero introducido en binario es : ". $dec;
}
if($_POST["conversion"] === "Octal"){
    echo "El numero introducido en Octal es : " . $oct;
}
if($_POST["conversion"] === "Hexadecimal"){
    echo "El numero introducido en Hexadecimal es : " . $hexa;
}
if($_POST["conversion"] === "Todas"){
    echo "El numero introducido en binario es : ". $dec."<br>";
    echo "El numero introducido en Octal es : " . $oct."<br>";
    echo "El numero introducido en Hexadecimal es : " . $hexa."<br>";
}
                        
?>
</BODY>
</HTML>
