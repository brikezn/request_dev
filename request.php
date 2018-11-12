<!DOCTYPE html>
<html>
    <head>
        <title>test.dev</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
        </head>
    <body>
        <div class="container">
            <div class="container">
                <nav class="nav blog-nav">
                    <a class="nav-link active" href="auth.php">Войти</a>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-2">
                </div>
                <div class="col-lg-4 col-md-3 col-sm-2">
                    <form class="form-signin">
                        <h2 class="form-signin-heading">Заполните форму</h2>
                        <input id="input-lastname" width="100%" type="text" class="form-control" placeholder="Фамилия" aria-describedby="basic-addon1" required autofocus>
                        <input id="input-name" type="text" class="form-control" placeholder="Имя" aria-describedby="basic-addon1" required>
                        <input id="input-patronymic" type="text" class="form-control" placeholder="Отчество" aria-describedby="basic-addon1" required>
                        <input id="input-adress" type="text" class="form-control" placeholder="Адрес" aria-describedby="basic-addon1" required>
                        <input id="input-phone" type="text" class="form-control" placeholder="Телефон" aria-describedby="basic-addon1" required>
                        <input id="input-email" type="email" class="form-control" placeholder="Электронная почта" aria-describedby="basic-addon1" required>
                        <button id="save-request-button" class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-2">
                </div>
            </div>
        </div>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/request.js" type="text/javascript">

        </script>
    </body>
</html>
