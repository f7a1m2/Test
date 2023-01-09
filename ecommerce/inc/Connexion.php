<?php
    $user='postgres';
    $pass='esdeath';
    $dsn='pgsql:host=localhost;port=5432;dbname=ecommerce';
    try {
        $base= new PDO($dsn,$user,$pass);
    }catch (PDOException $e) {
        print "Erreur ! :". $e->getMessage();
        die();
    }
?>