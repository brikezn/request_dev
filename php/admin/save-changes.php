<?php
    if(empty($_GET["id"])){
        echo "Ошибка идентификатора. [save-changes]";
    } elseif (empty($_GET["name"]) || empty($_GET["patronymic"]) || empty($_GET["lastname"]) ||
            empty($_GET["adress"]) || empty($_GET["phone"]) || empty($_GET["email"])) {
        echo "Поля не могут быть пустыми. [save-changes]";
    } else {

        if ($conn->connect_errno) {
            echo "Не удалось подключиться к MySQL: (\" . $conn->connect_errno . \") " . $conn->connect_error;
        };
        $conn = new mysqli("localhost:3306", "root", "45495", "sierra");
        $conn->set_charset("utf-8");

        $stmt = $conn->prepare("UPDATE request SET request_first_name = ?, request_patronymic = ?,
             request_lastname = ?, request_adress = ?, request_phone = ?,
             request_email = ? WHERE request_id = ?");
        $name = $_GET['name'];
        $patronymic = $_GET['patronymic'];
        $lastname = $_GET['lastname'];
        $adress = $_GET['adress'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        $id = $_GET['id'];
        $stmt->bind_param("ssssssi", $name, $patronymic, $lastname, $adress, $phone, $email, $id);

        $stmt->execute();
        $conn->commit();
        $stmt->close();
        $conn->close();
    }
?>
