<?php

/**
 * Seguem os detalhes para login para o banco de dados CLEARDB no Heroku
 */
$cleardb_url=parse_url(getenv("DATABASE_URL"));

$dbServer = $cleardb_url["host"];
$dbUser = $cleardb_url["user"];
$dbPassword = $cleardb_url["pass"];
$dbName = substr($cleardb_url["path"],1);

define("HOST", $dbServer);     // Para o host com o qual você quer se conectar.
define("USER", $dbUser);    // O nome de usuário para o banco de dados.
define("PASSWORD", $dbPassword);    // A senha do banco de dados.
define("DATABASE", $dbName);    // O nome do banco de dados.

$connection = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

/*Descomente para usar localmente*/
/*
define("SERVER","localhost");
define("USER","root");
define("PASSWORD", "");
define("DATABASE", "scrum");

$connection = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);
*/
