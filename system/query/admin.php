<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/system/db.php");

function findAll($db_PDO) {
    $stmt = $db_PDO->query("SELECT * FROM admins");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function create($db_PDO) {
    $create = $db_PDO->prepare("INSERT INTO admins (name, email, password) VALUES (:name, :email, :password)");
    $create->execute([
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "password" => md5($_POST["password"])
    ]); 
}

function edit() {

}

function delete() {

}

function findByEmail($db_PDO, $email) {
    $admin = $db_PDO->prepare("SELECT id, name, email, password FROM admins WHERE email=:email");
    $admin->execute([
        "email" => $email
    ]);

    return $admin->fetch();
}

function getItem($db_PDO) {
    $stmt = $db_PDO->query("SELECT * FROM products");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMember($db_PDO) {
    $stmt = $db_PDO->query("SELECT * FROM customers");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}