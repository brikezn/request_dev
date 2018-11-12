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
        </head>
    <body>
        <div class="container">
            <nav class="nav blog-nav">
                <a class="nav-link active" href="request.php">Отправить форму</a>
            </nav>
        </div>
        <div class="container">

          <form class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="input-login" class="sr-only">Email address</label>
            <input id="input-login" class="form-control" placeholder="Login" required autofocus>
            <label for="input-password" class="sr-only">Password</label>
            <input id="input-password" type="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button id="auth-button" class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
          </form>

    </div> <!-- /container -->

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/auth.js" type="text/javascript">

        </script>
    </body>
</html>
