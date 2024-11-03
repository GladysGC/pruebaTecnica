<?php

function traducirDia($day, $lang) {
    $dias = [
        "lunes" => ["en" => "Monday", "fr" => "Lundi"],
        "martes" => ["en" => "Tuesday", "fr" => "Mardi"],
        "miercoles" => ["en" => "Wednesday", "fr" => "Mercredi"],
        "jueves" => ["en" => "Thursday", "fr" => "Jeudi"],
        "viernes" => ["en" => "Friday", "fr" => "Vendredi"],
        "sábado" => ["en" => "Saturday", "fr" => "Samedi"],
        "domingo" => ["en" => "Sunday", "fr" => "Dimanche"]
    ];

    return $dias[strtolower($day)][strtolower($lang)] ?? " El Día no es válido";
}

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST["day"];
    $lang = $_POST["lang"];
    $resultado = traducirDia($day, $lang);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "author" content = "Gladys  beacriollo@hotmail.com">
	<meta name = "copyrigth" content = "Gladys Guanin">
	<meta name = "description" content = "Prueba Tecnica empresa Pulsar Technologies">
	<meta name = "robots" content = "all">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <title>Traductor de Días de la Semana</title>
    <link rel="stylesheet" href="./css/styleTras.css">
</head>
<body>
    <h1>Traductor de Días de la Semana</h1>
    <form action="translate.php" method="post">
        <label for="day">Ingrese el día de la semana:</label> <input type="text" id="day" name="day" required>
        <label for="lang">Selecciona el idioma "en" Inglés o "fr" Francés :</label>
        <select id="lang" name="lang" required>
            <option value="en">en</option>
            <option value="fr">fr</option>
        </select> 
        
        <button type="submit">Traducir</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultados de la Traducción</h2>
        <p>Día ingresado: <strong><?php echo ($day); ?></strong></p>
        <p>Idioma seleccionado: <strong><?php echo ($lang); ?></strong></p>
        <p>Traducción: <strong><?php echo ($resultado); ?></strong></p>
       
    <?php endif; ?>
    <a href="index.html">Volver</a>
</body>
</html>

