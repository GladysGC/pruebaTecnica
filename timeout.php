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
    <title>Prueba para programador PHP/MySQL</title>
    <link rel="stylesheet" href="./css/stylecopyarcivo.css">
</head>
<body>
    <div class="main">
        <section class="questions">
            <div>
                <h1>Cómo Solucionar el Error 504 Gateway Timeout en tu Sitio Web</h1>
            </div>
            <div>
                <div class="parrafo">
                    <p> Para resolver el problema de ejecución de un script PHP desde un navegador local 
                        que termina con un tiempo de espera ("timeout"), deberías considerar las siguientes posibles causas y soluciones:</p>
                </div>
                <div>
                    <div class="parrafo">
                        <ul>
                            <li> Aumenta el tiempo de ejecución en php.ini </li>
                            <ul>
                                <li>Busca la línea max_execution_time = X</li>
                                <li>Cambia X a un valor mayor (por ejemplo, 120)</li>
                            </ul>
                            <li>Usa set_time_limit() al inicio del script
                                <p class="comando">set_time_limit(120);</p>
                            </li>
                            <li>Revisa el timeout del navegador y divide la operación en pasos menores si es necesario.</li>
                            <li>Optimiza el código para reducir uso de recursos.</li>
                            <li>Si usas PHP-FPM, aumenta pm.max_requests y request_terminate_timeout.</li>
                            <li>Verifica las configuraciones de Apache/Nginx que puedan estar limitando scripts largos.</li>
                        </ol>
                    </div>
                      
                </div>      
            </div>
        </section>

        <footer class="footer-info">
        <h3>Esta información se obtuvo de varias fuentes:</3>
        <ul>
        <li><a href="https://www.youtube.com/watch?v=QluD2sO1fco">How to Fex 504 Gatway Timeout Error</a></li>
            <li><a href="https://www.php.net/manual/es/book.session.php">PHP </a></li>        
        </ul>
        <a href="index.php">Volver</a>
        </footer>

    </div>
    
</body>
</html>