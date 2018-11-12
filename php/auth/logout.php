<?php
    error_log("Выход из сессии");
    session_start();
    $_SESSION['id'] = 0;
    session_destroy();
    header("Location: http://localhost/test.dev/auth.php");
    exit;
?>
