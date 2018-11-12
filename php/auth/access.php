<?php
    session_start();
    if (isset($_REQUEST[session_name()])) session_start();
    $conn = new mysqli("localhost:3306", "root", "45495", "sierra");

    if ($conn->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    };

    $stmt = $conn->prepare("SELECT profile_id FROM profile WHERE profile_login = ? AND profile_password = MD5(?)");
    $login = $_GET['login'];
    $password = $_GET['password'];
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $id = $stmt->fetch();
    $_SESSION['profile_id'] = $id;
    $out = json_encode(array('id' => $id));
    echo $out;
?>
