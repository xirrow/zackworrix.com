<?php
try

{
    $pdo = new PDO('mysql:host=XXXX;dbname=XXXX', 'XXXX', 'XXXX');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}

catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include ('inc/error.php');
    exit();
}

include ('home/home.php');
?>
