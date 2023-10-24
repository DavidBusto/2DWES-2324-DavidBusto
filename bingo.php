<HTML>
<HEAD> <TITLE> Bingo</TITLE> </HEAD>

<BODY>
    <h1>Bingo</h1>
<?php

$jugadores = array();

function rellenarCartones(){
    $carton = array();
    for($i=0;$i<15;$i++){
    $numero = random_int(1,60);
    if(!in_array($numero , $carton[$i])){
    $carton[$i] = $numero;
    }else{
        do{
            $numero =  random_int(1,60);
        }while(in_array($numero , $carton[$i])){
        }
    }
}
return $carton;
}

function CartonesJugadores(){
    for($i=0;$i<4;$i++){
        for($j=0;$j<3;$j++){
        $carton = rellenarCartones();
        $jugadores[$i][$j] = $carton;
        }
    }
}
?>
</BODY>
</HTML>
