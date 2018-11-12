<?php
    $conn = new mysqli("localhost:3306", "root", "45495", "sierra");

    if ($conn->connect_errno) {
        echo "Не удалось подключиться к MySQL: (\" . $conn->connect_errno . \") " . $conn->connect_error;
    };

    $stmt = $conn->prepare("DELETE FROM request WHERE request_id = ?");

    if (!empty($_GET["id"]))
    {
        $id = $_GET["id"];
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $conn->commit();
    } else {
        echo "Ошибка идентификатора. [delete-row]";
    }

    $stmt->close();
    $conn->close();
?>
