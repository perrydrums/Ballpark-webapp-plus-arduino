<?php

session_start();

// LOGOUT BY RESETTING AND DETROYING SESSION AND COOKIES
$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

header("Location: index.php");

?>

<!-- LOGOUT INSTAGRAM ACCOUNT -->

<iframe src="https://instagram.com/accounts/logout/" width="0" height="0" />
