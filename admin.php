<!DOCTYPE html>

<?php
    include_once "php/auth/isAuthorized.php";
?>

<html>
    <head>
        <title>test.dev</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <meta charset="utf-8">
        </head>
    <body>
        <div class="container">
            <nav class="nav blog-nav">
                <a id="logout-button" class="nav-link active" href="">Выйти</a>
                <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#filter-modal">
                Добавить фильтр
                </button>
                <button  id="delete-filters" type="button" class="btn btn-link btn-sm">
                Убрать фильтры
                </button>
            </nav>

        </div>

        <div class="container">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Адрес</th>
                    <th>Телефон</th>
                    <th>Электронная почта</th>
                  </tr>
                </thead>
                    <tbody id="table-body">
                        <?php
                            include_once ("php/admin/admin-onload.php");
                        ?>
                        <!-- Modal change row -->
                        <div class="modal fade" id="change-modal" tabindex="-1" role="dialog" aria-labelledby="change-modal-label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Изменение данных</h4>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3">
                                    <div class="form-row">
                                        <label for="name-modal">Имя</label>
                                        <input width="100%" id="name-modal" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="patronymic-modal">Отчество</label>
                                        <input id="patronymic-modal" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="lastname-modal">Фамилия</label>
                                        <input id="lastname-modal" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="adress-modal">Адрес</label>
                                        <input id="adress-modal" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="phone-modal">Телефон</label>
                                        <input id="phone-modal" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="email-modal">Электронная почта</label>
                                        <input id="email-modal" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>


                                  <div class="modal-footer">
                                    <button id="save-changes-button" type="button" class="btn btn-primary" data-dismiss="modal">Сохранить</button>
                                    <button id="delete-row-button" type="button" class="btn btn-danger" data-dismiss="modal">Удалить</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <!-- Filter modal -->
                        <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="change-modal-label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Фильтрация данных</h4>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3">
                                    <div class="form-row">
                                        <label for="name-modal">Имя</label>
                                        <input width="100%" id="name-modal-filter" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="patronymic-modal-filter">Отчество</label>
                                        <input id="patronymic-modal-filter" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="lastname-modal-filter">Фамилия</label>
                                        <input id="lastname-modal-filter" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="adress-modal-filter">Адрес</label>
                                        <input id="adress-modal-filter" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="phone-modal-filter">Телефон</label>
                                        <input id="phone-modal-filter" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="form-row">
                                        <label for="email-modal-filter">Электронная почта</label>
                                        <input id="email-modal-filter" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>


                                  <div class="modal-footer">
                                    <button id="modal-button-filter" type="button" class="btn btn-primary" data-dismiss="modal">Обновить список</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </tbody>
            </table>
        </div> <!-- /container -->

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/admin.js" type="text/javascript">

        </script>
    </body>
</html>
