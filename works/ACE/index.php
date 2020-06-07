<?php
try

{
    $pdo = new PDO('mysql:host=localhost;dbname=plantbas_ace_multisport_db', 'plantbas_ace_user', 'p4ssword!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}

catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include ('includes/error.html.php');
    exit();
}

include ('home/home.html.php');
?>