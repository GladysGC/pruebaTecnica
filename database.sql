/*Base de datos*/

create database if not exists pruebatecnicaphp;

use pruebatecnicaphp;

/*Tabla*/

CREATE TABLE if not exists registroatributos (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    date VARCHAR(6) not null,
    time VARCHAR(6) not null,
    content TEXT not null);

/* Ingreso de datos*/
INSERT INTO registroatributos (date, time, content) VALUES 
('202123', '10:00', 'Primer contenido '),
('121103', '18:30', 'Segundo contenido '),
('071103', '07:00', 'Tercer contenido '),
('031113', '13:30', 'Cuartor contenido ');

/*Consulta por fecha desc*/
SELECT * FROM registroatributos ORDER BY date DESC;
