<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/system/db.php");

include "../../system/action.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    useQuery("admin.php");

    $admin = findByEmail($db_PDO, $_POST["email"]);
    if(!$admin) {
        redirect("/login");
        exit();
    }

    $password = md5($_POST["password"]);

    if($password!=$admin["password"]) {
        redirect("/login");
        exit();
    }

    $_SESSION["alfamart_admin_id"] = $admin["id"];
    redirect("/dashboard");
    exit();
}
else {
    redirect("/login");
    exit();
}