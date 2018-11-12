<?php
    $mysqli = new mysqli("localhost:3306", "root", "45495", "sierra");

    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    };

    $filter_name = isset($_REQUEST['filter_name']) && $_REQUEST['filter_name'] != "" ? "request_first_name = \"" . $_REQUEST['filter_name'] . "\", " : "";
    $filter_patronymic = isset($_REQUEST['filter_patronymic'])  && $_REQUEST['filter_patronymic'] != "" ? "request_patronymic = \"" . $_REQUEST['filter_patronymic'] . "\", " : "";
    $filter_lastname = isset($_REQUEST['filter_lastname'])  && $_REQUEST['filter_lastname'] != "" ? "request_lastname = \"" . $_REQUEST['filter_lastname'] . "\", " : "";
    $filter_adress = isset($_REQUEST['filter_adress'])  && $_REQUEST['filter_adress'] != "" ? "request_adress = \"" . $_REQUEST['filter_adress'] . "\", " : "";
    $filter_phone = isset($_REQUEST['filter_phone'])  && $_REQUEST['filter_phone'] != "" ? "request_phone = \"" . $_REQUEST['filter_phone'] . "\", " : "";
    $filter_email = isset($_REQUEST['filter_email'])  && $_REQUEST['filter_email'] != "" ? "request_email = \"" . $_REQUEST['filter_email'] . "\", " : "";

    $query_where = "WHERE " . $filter_name . $filter_patronymic . $filter_lastname . $filter_adress . $filter_phone . $filter_email;
    $query_where_length = strlen($query_where);
    $query_where = substr($query_where, 0, $query_where_length - 2);

    if($query_where_length > 6) {
        $query_where = substr($query_where, 0, $query_where_length - 2);
    } else {
        $query_where = "";
    }

    error_log("Quety where: ".$query_where);

    $mysqli->set_charset("utf-8 ");
    $query = "SELECT request_id, request_first_name, request_patronymic, request_lastname,
    request_adress, request_phone, request_email FROM REQUEST $query_where ORDER BY request_id";
    $rows = array();
    $i = 0;

    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_row()) {
            $rows[$i] = $row;
            $i = $i +1;
            printf ("
            <tr id=\"row-%s\" data-id=\"%s\">
              <th class=\"id-value\" scope=\"row\">%s</th>
              <th class=\"name-value\">%s</th>
              <th class=\"patronymic-value\">%s</th>
              <th class=\"lastname-value\">%s</th>
              <th class=\"adress-value\">%s</th>
              <th class=\"phone-value\">%s</th>
              <th class=\"email-value\">%s</th>
              <th><button id=\"button_row_%s\" data-id=\"%s\" type=\"button\" class=\"btn btn-primary change-button\">Изменить</button></th>
            </tr> ", $row[0], $row[0], $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[0], $row[0]);
        }

        $result->close();
        $mysqli->close();
    }
?>
