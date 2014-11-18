<?php 
    /*Conectando no ClearDB do Heroku*/
    $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = "b5a7fb87bfdf31";
    $password = "2ac358a1";
    $db = substr($url["path"],1);

    mysqli_connect($server, $username, $password);
/*Descomente para usar localmente*/
/*
define("SERVER","localhost");
define("USER","root");
define("PASSWORD", "");
define("DATABASE", "scrum");

$connection = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);
*/
