<?php
$databaseHost = 'localhost';
$databaseName = 'pruebatecnicaphp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die("Conexión fallida: " . mysqli_connect_error());
}

/* prima forma de hacer consulta por fecha las reciente */
/*$result = mysqli_query($mysqli, "SELECT * FROM registroatributos ORDER BY date DESC");*/

/* Segunda  forma de hacer consulta por fecha las reciente */
   /*$result = mysqli_query($mysqli, "SELECT * FROM registroatributos 
    WHERE date = (SELECT MAX(date) FROM registroatributos) 
    AND time = (SELECT MAX(time) FROM registroatributos WHERE date = (SELECT MAX(date) FROM registroatributos))");*/
    $result = mysqli_query($mysqli, "SELECT ra.* FROM registroatributos ra INNER JOIN (SELECT date, MAX(time) as max_time
                                    FROM registroatributos GROUP BY date) as sub_consulta ON ra.date = sub_consulta.date 
                                    AND ra.time = sub_consulta.max_time ORDER BY ra.date DESC, ra.time DESC
");

echo "<h2>Ordenados por fecha mas reciente</h2>";
if ($result && mysqli_num_rows($result) > 0) {
    echo "     ID    "."  " . "   FECHA   " . "   HORA   " . "   CONTENIDO   " . "<br>";
    while ($res = mysqli_fetch_array($result)) {
        echo  $res["id"] ."   " . $res["date"] ."   " . $res["time"] ."   " . $res["content"] ."   " . "</td>" . "<br>";
    }
} else {
    echo "0 resultados";
}
mysqli_close($mysqli);
?>
 <a href="index.php">Volver</a>
