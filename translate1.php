<?php
$day_trastale = [
    "lunes" => ["en" => "Monday", "fr" => "Lundi"],
    "martes" => ["en" => "Tuesday", "fr" => "Mardi"],
    "miercoles" => ["en" => "Wednesday", "fr" => "Mercredi"],
    "jueves" => ["en" => "Thursday", "fr" => "Jeudi"],
    "viernes" => ["en" => "Friday", "fr" => "Vendredi"],
    "sábado" => ["en" => "Saturday", "fr" => "Samedi"],
    "domingo" => ["en" => "Sunday", "fr" => "Dimanche"]
];

function traducir_dia_en_fr($day, $lang) {
    global $day_trastale; 
    $day = strtolower($day);
    if (array_key_exists($day,  $day_trastale)) {
        switch ($lang) {
            case 'en':
                return "Día: " . ucfirst($day) . " => Traducción: " . $day_trastale[$day]['en'];
            case 'fr':
                return "Día: " . ucfirst($day) . " => Traducción: " . $day_trastale[$day]['fr'];
            default:
                return "Error: idioma ingresado no válido"; 
        }
    } else {
        return "Error: día ingresado no válido"; 
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gladys beacriollo@hotmail.com">
    <meta name="copyrigth" content="Gladys Guanin">
    <meta name="description" content="Prueba Tecnica empresa Pulsar Technologies">
    <meta name="robots" content="all">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <title>Traductor de Días de la Semana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:darksalmon;
            display: flex;               
            flex-direction: column;     
            justify-content: center;     
            align-items: center;         
            height: 50vh;            
            padding: 20px;   
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Traductor de Días de la Semana</h1>
    <div>
        <p><?php echo traducir_dia_en_fr("lunes", "en"); ?></p>
        <p><?php echo traducir_dia_en_fr("martes", "fr"); ?></p>
        <p class="error"><?php echo traducir_dia_en_fr("mky", "es"); ?></p>
        <p class="error"><?php echo traducir_dia_en_fr("lunes", "ep"); ?></p>
    </div>
</body>
</html>
