# Prueba para programador PHP/MySQL

# ENUNCIADO
### 1.- Se pide una función de dos parámetros que devuelva una traducción de la variable $day: "lunes", "martes", "miercoles", "jueves", "viernes", "sábado" o "domingo".La salidas correspondientes serán las traducciones al inglés y francés en función del parámetro $lang: "en", "fr".

###  EXPLICASIONDE COMO LO EH REALIZADO ESTE EJERCICIO
#### 1.1.- Crear un array asociativo donde cada elemento tiene una clave y un valor Ejemplo: $dias = [
    "lunes" => ["en" => "Monday", "fr" => "Lundi"],
    "martes" => ["en" => "Tuesday", "fr" => "Mardi"],
];
#### 1.2.- Hacer una funcion donde recibe dos parametros($day, $lang), como el array esta fuera de la funcion, creo una variable global con el nombre del array para usar dentro de la funcion, seguido seria comprobar atravez de una funcion dentro del if si el día es válido, si la respuesta es positiva traduce al inglés o francés según el parametro enviado($lang), y se retorna el resultado.

###  2.- En una tabla se tiene registros con atributos: "id" (int autoincremental), "date" (string YYMMDD), "time" (String HHMMSS) y "content" (text). Queremos ordenar por fecha de mas reciente a más antiguo los registros.Escribir al menos dos consultas diferentes para obtener el resultado deseado.

###  EXPLICASIONDE COMO LO EH REALIZADO ESTE EJERCICIO
### 2.1.- Eh puesto en marcha Xampp, eh seleccionado el Adm de MySQL dentro de este en la pestaña SQL, eh crear una base de datos,eh puesto en uso, seguido creo la tabla con los campos especificados y su tipo de campo, seguido ingresar datos a esta tabla para hacer las consultas,

### 2.2.- Regreso al codigo, defino las variables de configuración de la base de datos, conexión a la base de datos con mysqli_connect, comprobar si la conexión es correcta.

### 2.3.- $result = mysqli_query($mysqli, "SELECT * FROM registroatributos ORDER BY date DESC"); realizar la consulta con este código, este fue facil porque lo hecho varias veces esta clase de consultas.Y por ultimo visualizar, NOTA:  La segunda forma de hacer consultas lo busque por internet.

###  3.- Cierto proceso termina generando la siguiente cadena: "Process terminated with code 15, Time init: 2022-04-26 23:00:00, Time end: 2022-04-26 23:34:12" Queremos guardar las fechas "init" y "end" en dos variables cualesquiera que sean. Escribe el código necesario.

###  EXPLICASIONDE COMO LO EH REALIZADO ESTE EJERCICIO
### 3.1.- Crear una variable y asignar la cadena generada, seguido ah sido buscar un patron que me permita extraer la fecha  y la hora de la cadena.

### 3.2.- Buscar una función que me permita extraer esas dos subcadenas. He probado con varias funciones, entre ellas preg_split(), que divide una cadena en un array basándose en un patrón de expresión regular. En este caso, el array tendría tres posiciones [0, 1, 2], y con la función explode() extraigo las dos últimas posiciones.

### Otra opción fue crear dos patrones que permitan extraer la fecha de inicio y final dentro de la cadena, y con la función preg_match() extraer la subcadena dentro de la cadena en base al patrón creado.


###  4.- Estando conectados vía SSH a un servidor vemos un fichero zip de gran tamaño(100MB) y queremos tener una copia en nuestro equipo (Ubuntu) ¿Cómo lo harías?

###  EXPLICASIONDE COMO LO EH REALIZADO ESTE EJERCICIO

### 4.1.- Para esta pregunta me eh puesto a leer varias páginas y saque un resumen de paso aprendi algo mas que es lo importante.

### 4.2.- Primero, asegúrate de que tienes acceso SSH al servidor remoto y conoces los detalles de conexión (dirección IP o dominio, puerto SSH, usuario, etc.). Seguido ir a la terminal en tu equipo local Ubuntu. Y ejecutar el comando SCP. Ejemplo: class="comando">scpusername@remote_server_ip:/path/to/large/file.zip /local/path/to/save/file.zip

### 4.3 Recomendable tener en cuenta: Asegúrate de tener suficiente espacio libre en tu disco duro local.Si el archivo es muy grande,mejor usar rsync oh si necesitas transferir múltiples archivos grandes, puedes usar el flag -r oh si ya es estremadamente grande usar -l.  

###  5.- Acabas de terminar un código de PHP y lo intentas ejecutar desde un navegador local, el resultado es que la página no se muestra y el navegador acaba por dar "timeout" ¿Qué comprobarías o revisarías para dar con el problema?

###  EXPLICASIONDE COMO LO EH REALIZADO ESTE EJERCICIO

### 5.1. Igual que el anterior me eh tenido que docuemntar y lo que eh podido aprender es:

### Recomendaciones: Agregar set_time_limit(0); al inicio del script para eliminar el límite predeterminado. Implementar ignore_user_abort(true); para evitar que el script se cierre si el usuario cierra la ventana, Usar flush() y ob_flush() periódicamente para enviar datos al navegador y finalmente Revisar los logs de errores para identificar problemas ocultos.