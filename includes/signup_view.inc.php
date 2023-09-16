<?php

declare(strict_types=1);

require_once "config_sessions.inc.php";

function check_if_errors()
{
    if (isset($_SESSION["errors_signup"])) {
        echo "<br>";
        $errors = $_SESSION["errors_signup"];
        foreach ($errors as $error) {
            echo "<p>$error</p>" . "<br>";
        }
        unset($_SESSION["errors_signup"]);
    }
}
