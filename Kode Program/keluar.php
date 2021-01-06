<?php
 session_start();

    $_SESSION["login"] = '';
    unset($_SESSION["login"]);
    session_unset();
    session_destroy();

    setcookie('xx','', time()-3600);
    setcookie('key','', time()-3600);

    header("Location: index.php");
?>