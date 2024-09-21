<?php
    include "config.php";
    try {
        $serverAddress = DB_HOST;
        $databaseName = DB_DATABASE;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $db_PDO = new PDO(
            "mysql:host={$serverAddress};dbname={$databaseName}",
            $username,
            $password
        );
    } catch(\Exception $e) {
        die("Gagal koneksi => " . $e->getMessage());
    }