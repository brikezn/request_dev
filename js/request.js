$(document).ready( function() {

    $('#save-request-button').click(function() {
        var name = document.getElementById('input-name').value;
        var patronymic = document.getElementById('input-patronymic').value;
        var lastname = document.getElementById('input-lastname').value;
        var adress = document.getElementById('input-adress').value;
        var phone = document.getElementById('input-phone').value;
        var email = document.getElementById('input-email').value;

        if (name == "" || patronymic == "" || lastname == "" || adress == "" || phone == "" || email == "") {
            alert("Поля не должны быть пустыми!");
        } else {
            $.ajax({
                url:"php/request/save-request.php",
                method: "POST",
                data:{
                    "name": name,
                    "patronymic": patronymic,
                    "lastname": lastname,
                    "adress": adress,
                    "phone": phone,
                    "email": email
                },
                success:function(){
                    alert("Заявка сохранена!");
                }
            });
        }
    });
});
