<?php
    function redirect($extra) {
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri/$extra");
        exit;
    }

    if (!isset($_SESSION)) session_start();
    $id = isset($_SESSION['profile_id']) ? $_SESSION['profile_id'] : -1;
    $ref = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "";
    $ref_name_start = strripos($ref, "/");
    $ref_name_end = strripos($ref, "?");
    $ref_name = "";

    if ($ref_name_end < $ref_name_start || $ref_name_end === false) {
        $ref_name = substr($ref, $ref_name_start + 1);
    } else {
        $ref_name_length = $ref_name_end - $ref_name_start - 1;
        $ref_name = substr($ref, $ref_name_start + 1, $ref_name_length);
    }

    switch ($ref_name) {
        case 'auth.php':
            if ($id > 0) {
                redirect("admin.php");
            }

            break;
        case 'admin.php':
            if ($id === -1) {
                redirect("auth.php");
            }

            break;
        case 'isAuthorized.php':
            if ($id > 0) {
                redirect("isAuthorized.php");
            }
            break;
        default:
            error_log("DEFAULT");
            break;
    }
?>
