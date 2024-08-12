#  Crud en PHP muy pero muy basico

1.-Primero crear la base de datos mysql

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudbasico";


CREATE TABLE user (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password CHAR(60) NOT NULL
);


