<?php
$databaseHost = 'localhost';
$databaseName = 'pruebatecnicaphp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die("Conexión fallida: " . mysqli_connect_error());
}


$result = mysqli_query($mysqli, "SELECT * FROM registroatributos ORDER BY date DESC");

echo "<h2>Ordenados por fecha mas reciente</h2>";


if ($result && mysqli_num_rows($result) > 0) {
    echo "     ID:    "."  " . "   Fecha:   " . "   Hora:   " . "   Contenido:   " . "<br>";
    while ($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" ."   " . $res["id"] ."   " . $res["date"] ."   " . $res["time"] ."   " . $res["content"] ."   " . "</td>" . "<br>";
        echo "</tr>";
    }
} else {
    echo "0 resultados";
}
mysqli_close($mysqli);
?>
 <a href="index.php">Volver</a>
