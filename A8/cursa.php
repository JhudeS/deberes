<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

const META = 44;
const CARES_DAU = 4;

 $titol = "Cachou";
 $meta = META;
 // Array de tortugas 
 $tortugues =[
["nom" => "Greta", "posicio" => 0 ,"dormides"  => 0 , "turbos" => 0],
["nom" => "Pablo", "posicio" => 0 ,"dormides"  => 0 , "turbos" => 0],
["nom" => "Raul", "posicio" => 0 ,"dormides"  => 0 , "turbos" => 0],
["nom" => "Pedro", "posicio" => 0 ,"dormides"  => 0 , "turbos" => 0],
["nom" => "Mario", "posicio" => 0 ,"dormides"  => 0 , "turbos" => 0],
 
];
// variables de la carrera inicializadas 
 $historial = [];
 $narracio = [];
 $classificacio = [];
 $guanyadora ="";
 $final = false;

 function netejaText($t){
// limpia el texto dejando todo en minusculas, la primera en mayuscula y los espacios de los lados 
 $t = strtolower($t);
  $t = ucfirst($t);
$t = trim($t);

return $t;

 }
// limpiamos el titulo 
 $titol = netejaText($titol);
// limpiamos el nombre de todas las tortugas 
 for ($i = 0; $i < count($tortugues); $i++ ){
    $tortugues[$i]['nom'] = netejaText($tortugues[$i]['nom']);
 }
 
// tira el dado con las CARAS_DEL_DADO como default en caso de no darsele un numero 
function tiraDau($cares = CARES_DAU){
$numero = rand(1, $cares);
return $numero;
}
// funcion que recibe una tortuga y las casillas que se mueve y las suma
function mou (&$tortuga, $caselles){
$tortuga['posicio'] += $caselles;

}

// comprueba todo el array de tortugas y guarda la lider 
function lider($tortugues){
// inicializamos con la primera tortuga     
$tortugaLider = $tortugues[0];

    for ($i = 1; $i < count($tortugues); $i++ ){
        // condicional de posicion 
        if ($tortugues[$i]['posicio'] > $tortugaLider['posicio']){
            $tortugaLider = $tortugues[$i];
        }
    }

    return $tortugaLider['nom'];
}
// codigo de la carrera 
while (!$final) {
    // inicia la ronda
    $ronda = count($historial) + 1;
    $fets = [];

    // por cada tortuga se tirara el dado se guardara el resultado y movera las cassilas pertinentes 
    for ($i = 0; $i < count($tortugues); $i++) {
        $sort = rand(1, 10);
        $caselles = tiraDau();
        // si el rand es = no se mueve nada
        if ($sort === 1) {
            $tortugues[$i]['dormides']++;
            $fets[] = $tortugues[$i]['nom'] . '  ce duerme!';
        } else {
            // si devuelve 10 pone turbo y se mueve las casillas que se iba a mover + 3
            if ($sort === 10) {
                $tortugues[$i]['turbos']++;
                mou($tortugues[$i], $caselles + 3);
                $fets[] = $tortugues[$i]['nom'] . ' activa el turbo!';
            } else {
                mou($tortugues[$i], $caselles);
            }
        }
    }
    // imagen del estado de todas las tortugas despues de haberse movido 
    $foto = [];
    foreach ($tortugues as $tortuga) {
        $foto[$tortuga['nom']] = $tortuga['posicio'];
    }
    // guardamos la foto de la ronda en el historial 
    $historial[] = $foto;
    // narrador dice una frase x ronda con el primero y el ultimo
    $narrador = 'Ronda ' . $ronda . ': ' . lider($tortugues)
        . ' lidera amb ' . max(array_column($tortugues, 'posicio')) . ' caselles.';
    if (count($fets) > 0) {
        $narrador .= ' ' . implode(' ', $fets);
    }
    $narracio[] = $narrador;
    // comprobacion de el final comparando la tortuga con la posicion mas grande 
    $final = max(array_column($tortugues, 'posicio')) >= $meta;
}

foreach ($tortugues as $tortuga) {
    $classificacio[$tortuga['nom']] = $tortuga['posicio'];
}
arsort($classificacio, SORT_NUMERIC);
$guanyadora = array_key_first($classificacio);

require __DIR__ . '/visual.php';



?>    
</body>
</html>