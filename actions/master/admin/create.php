<?php
include("../../../system/action.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/system/db.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    useQuery("admin.php");

    create($db_PDO);
}

redirect("/master/admin");
//redirect() is from app.php