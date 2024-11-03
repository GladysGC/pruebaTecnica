<?php
echo "Guardar la fecha inicial y final de una cadena. </br></br></br>";

$cadenaResultante = "Process terminated with code 15, Time init: 2022-04-26 23:00:00, Time end: 2022-04-26 23:34:12";

// $patternInit = '/T.*?(\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2})/'; 
// $patternEnd = '/T.*?(\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2})$/'; 

// $fechaInicio = preg_match($patternInit, $cadenaResultante, $matchesInit) ? $matchesInit[1] : null;
// echo "Fecha de inicio: {$fechaInicio}\n";

// $fechaFin = preg_match($patternEnd, $cadenaResultante, $matchesEnd) ? $matchesEnd[1] : null;
// echo "Fecha finnal: {$fechaFin}\n";



$subcadena = preg_split('/,\s*/', $cadenaResultante); 

$fechaInicio = explode(": ", $subcadena[1])[1];
$fechaFin = explode(": ", $subcadena[2])[1]; 

echo "Fecha  de inicio: $fechaInicio . </br>";
echo "Fecha  de fin: $fechaFin";

?>
