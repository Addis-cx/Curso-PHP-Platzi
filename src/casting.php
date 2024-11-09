<?php

// $numerito = "5";
// var_dump($numerito);

// $numerito = (int) $numerito;
// var_dump($numerito);

// $dias = 5.89;
// $dias = (int) $dias;
// var_dump($dias);


// $banderita = 1;
// $banderita = (bool) $banderita;

// var_dump($banderita);

//Fácil
$nombre = "Carlos"; //String
$apellido = "Gómez"; //String
$edad = 18; // int
$aprobado = true; // bool

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) /5; //float
$nombre_completo = $nombre." ".$apellido; //string
$presento_examen = (bool)1; //bool(true)

//Avanzado
$numero_preguntas = 5+ "5"; //int(10)
$numero_respuestas = "5" + 5; //int(10)
$promedio_maximo = $numero_respuestas / 1.0; //float(10), solo porque se divide en 1.0, si fuera 1, sería int
$michis = 3 + "5 michis"; //int(8) (con Warning)


//testear resultados:
var_dump($promedio_maximo);


?>