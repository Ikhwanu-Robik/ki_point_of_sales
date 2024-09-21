<?php
include(__DIR__ . "/config.php");

function middleware() {
    session_start();
    //get gets its data from parameter embedded by .htaccess
    $view = @$_GET["view"] ?: "login";

    $isLogin = @$_SESSION["alfamart_admin_id"];
    if($isLogin && $view=="login") {
        return redirect("/dashboard");
        exit();
    }
    if(!$isLogin && $view != "login") {
        return redirect("/login");
        exit();
    }

    return $view;
}

function render($view, $db_PDO) {
    $include = @include("pages/$view.php");

    if(!$include) {
        @   $includeTwo = @include("pages/$view/index.php");
    }
    if(@!$includeTwo) {
        @include("pages/master/$view/index.php");
    }
}

function url($url) {
    return BASE_URL . $url;
}

function action($url) {
    return url("/actions/$url.php");
}

function redirect($path) {
    $url = url($path);
    header("Location: $url");
    exit();
}