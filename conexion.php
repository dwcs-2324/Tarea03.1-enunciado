
<?php




function getConnection()
{

    $con = null;
    $host = "localhost";
    $db = "bookdb";
    $user = "user-bookdb";
    $pass = "abc123.";
    $dsn = "mysql:host=$host;dbname=$db";

    try {

        $con = new PDO($dsn, $user, $pass,  array(
            PDO::ATTR_PERSISTENT => true
        ));

        //Esto no hace falta en versión PHP 8 y superiores: https://www.php.net/manual/en/pdo.error-handling.php
        //PDO::ERRMODE_EXCEPTION: As of PHP 8.0.0, this is the default mode.
        //$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {

        echo "Error en la conexión: mensaje: " . $ex->getMessage();
    }
    return $con;
}
