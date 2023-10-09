<HTML>
<HEAD> <TITLE> Calculadora</TITLE> </HEAD>

<BODY>
    <h1>Calculadora</h1>
<?php

$Suma="a";
$Resta="a";
$Producto="a";
$Division="a";

if($_POST["Suma"] === "Suma"){
echo "El resultado de la suma de : " . $_POST["op1"] . " y " . $_POST["op2"] . " es: " . ($_POST["op1"] + $_POST["op2"]);
}
if($_POST["Resta"] === "Resta"){
    echo "El resultado de la resta de : " . $_POST["op1"] . " y " . $_POST["op2"] . " es: " . ($_POST["op1"] - $_POST["op2"]);
}
if($_POST["Producto"] === "Producto"){
    echo "El resultado del producto de : " . $_POST["op1"] . " y " . $_POST["op2"] . " es: " . ($_POST["op1"] * $_POST["op2"]);
}
if($_POST["division"] === "division"){
    echo "El resultado de la division de : " . $_POST["op1"] . " y " . $_POST["op2"] . " es: " . ($_POST["op1"] / $_POST["op2"]);
}
                        
?>
</BODY>
</HTML>
