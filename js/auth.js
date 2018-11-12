$(document).ready( function() {

    $('#auth-button').click(function() {
        var login = document.getElementById('input-login').value;
        var password = document.getElementById('input-password').value;

        if (login == "" || password == "") {
            alert("Поля не должны быть пустыми!");
        } else {
            var id = -1;

            $.ajax({
                url:"php/auth/access.php",
                method: "GET",
                async: false,
                data:{
                    "login": login,
                    "password": password
                },
                success: function(data) {
                    data = JSON.parse(data);
                    id = Number(data['id']);
                }
            });

            if (id == "") {
                alert("Введены не верные данные!");
            } else {
                location.href("http://localhost/test.dev/admin.php");
            }
        }
    });
});
