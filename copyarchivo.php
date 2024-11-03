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
                <h1>Transferir archivos con SCP por SSH</h1>
            </div>
            <div>
                <div class="parrafo">
                    <h2>Comando SCP</h2>
                    <p> El comando SCP permite transferir archivos grandes desde un servidor remoto a tu equipo local (Ubuntu) de manera segura 
                        entre un equipo local y un servidor remoto usando SSH</p>
                </div>
                <div>
                    <div class="parrafo">
                        <h3>Podemos seguir estos pasos:</h3>
                        <ul>
                            <li>Primero, asegúrate de que tienes acceso SSH al servidor remoto y conoces los detalles de conexión (dirección IP o dominio, puerto SSH, usuario, etc.).</li>
                            <li>Abre una terminal en tu equipo local Ubuntu.</li>
                            <li>Ejecuta el siguiente comando SCP:
                                <p class="comando">scp username@remote_server_ip:/path/to/large/file.zip /local/path/to/save/file.zip</p>
                            </li>
                        </ol>
                    </div>
                    <div class="parrafo">
                        <h3>Donde:</h3>
                        <ul>
                            <li><strong>username</strong> es tu usuario en el servidor remoto</li>
                            <li><strong>remote_server_ip</strong> es la dirección IP o dominio del servidor remoto</li>
                            <li><strong>/path/to/large/file.zip</strong> es la ruta completa al archivo zip en el servidor remoto</li>
                            <li><strong>/local/path/to/save/</strong> es la ruta local donde quieres guardar el archivo en tu equipo</li>
                        </ul>
                    </div>
                    <div class="parrafo">
                        <h3>Por ejemplo:</h3>
                        <p>Este comando iniciará la transferencia del archivo. 
                        Dependiendo del tamaño del archivo, puede tardar varios minutos o incluso horas.</p>
                        <p class="comando"><code>scp johndoe@192.168.1.100:/var/www/mywebsite/large_file.zip ~/Downloads/</code></p>
                    </div>
                    <div class="parrafo">    
                        <h3>Algunas consideraciones importantes:</h3> 
                        <ul>
                            <li>Asegúrate de tener suficiente espacio libre en tu disco duro local para almacenar el archivo.</li> 
                            <li>Si el archivo es muy grande, considera usar rsync en lugar de SCP para transferencias más eficientes.</li> 
                            <li>Si necesitas transferir múltiples archivos grandes, puedes usar el flag -r para transferir carpetas de forma recursiva.</li> 
                            <li>Si el archivo es especialmente grande, puedes usar la opción -l para limitar la velocidad de transferencia para evitar sobrecargar tu red.</li> 
                        </ul>
                    </div>  
                </div>      
            </div>
        </section>

        <footer class="footer-info">
        <h3>Esta información se obtuvo de varias fuentes:</3>
        <ul>
            <li><a href="https://desarrolloweb.com/articulos/transferir-archivos-scp-ssh.html">Desarrolloweb.com </a></li>
            <li><a href="https://blogubuntu.com/copiar-ficheros-traves-ssh-comando-scp">BlogUbuntu</a></li>
        </ul>
        <a href="index.php">Volver</a>
        </footer>

    </div>
    
</body>
</html>