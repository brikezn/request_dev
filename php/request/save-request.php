<?php
    if (empty($_POST["name"]) || empty($_POST["patronymic"]) || empty($_POST["lastname"]) ||
            empty($_POST["adress"]) || empty($_POST["phone"]) || empty($_POST["email"])) {
        echo "Поля не могут быть пустыми. [save-changes]";
    } else {
        if ($conn->connect_errno) {
            echo "Не удалось подключиться к MySQL: (\" . $conn->connect_errno . \") " . $conn->connect_error;
        };
        $conn = new mysqli("localhost:3306", "root", "45495", "sierra");
        $conn->set_charset("utf-8");

        $stmt = $conn->prepare("INSERT INTO request VALUES (DEFAULT, ?, ?, ?, ?, ?, ?)");
        $name = $_POST['name'];
        $patronymic = $_POST['patronymic'];
        $lastname = $_POST['lastname'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $stmt->bind_param("ssssss", $name, $patronymic, $lastname, $adress, $phone, $email);

        $stmt->execute();
        $conn->commit();
        $stmt->close();
        $conn->close();

    }
?>
