$(document).ready( function() {

    function refresh() {
        window.location.href = "http://localhost/test.dev/admin.php";
    }

    $('#delete-filters').click(function() {
        refresh();
    });

    $('#modal-button-filter').click(function() {
        var filter_name = "filter_name=" + document.getElementById('name-modal-filter').value;
        var filter_patronymic = "filter_patronymic=" +  document.getElementById('patronymic-modal-filter').value;
        var filter_lastname = "filter_lastname=" +  document.getElementById('lastname-modal-filter').value;
        var filter_adress = "filter_adress=" +  document.getElementById('adress-modal-filter').value;
        var filter_phone = "filter_phone=" +  document.getElementById('phone-modal-filter').value;
        var filter_email = "filter_email=" +  document.getElementById('email-modal-filter').value;
        var url_param = "?" + filter_name + "&" + filter_patronymic + "&" + filter_lastname + "&" + filter_adress + "&" + filter_phone + "&" + filter_email;

        window.location.href = "http://localhost/test.dev/admin.php" + url_param;
    });


    $('.change-button').click(function() {
        var id = document.activeElement.getAttribute('data-id');
        var rowId = "row-" + id;
        document.getElementById('save-changes-button').setAttribute('data-id', id);
        document.getElementById('delete-row-button').setAttribute('data-id', id);

        var name = document.getElementById(rowId).getElementsByClassName('name-value').item(0).innerText;
        $('#name-modal').val(name);
        var patronymic = document.getElementById(rowId).getElementsByClassName('patronymic-value').item(0).innerText;
        $('#patronymic-modal').val(patronymic);
        var surname = document.getElementById(rowId).getElementsByClassName('lastname-value').item(0).innerText;
        $('#lastname-modal').val(surname);
        var adress = document.getElementById(rowId).getElementsByClassName('adress-value').item(0).innerText;
        $('#adress-modal').val(adress);
        var phone = document.getElementById(rowId).getElementsByClassName('phone-value').item(0).innerText;
        $('#phone-modal').val(phone);
        var email = document.getElementById(rowId).getElementsByClassName('email-value').item(0).innerText;
        $('#email-modal').val(email);

        $('#change-modal').modal('show');
    });

    $('#save-changes-button').click(function() {
        var id = document.getElementById('save-changes-button').getAttribute('data-id');
        var name = document.getElementById('name-modal').value;
        var patronymic = document.getElementById('patronymic-modal').value;
        var lastname = document.getElementById('lastname-modal').value;
        var adress = document.getElementById('adress-modal').value;
        var phone = document.getElementById('phone-modal').value;
        var email = document.getElementById('email-modal').value;

        $.ajax({
            url:"php/admin/save-changes.php",
            data:{
                "name": name,
                "patronymic": patronymic,
                "lastname": lastname,
                "adress": adress,
                "phone": phone,
                "email": email,
                "id": id},
            success:function(){
                alert("Update done!");
                refresh();
            }
        });
    });

    $('#delete-row-button').click(function() {
        var id = document.getElementById('delete-row-button').getAttribute('data-id');

        $.ajax({
            url:"php/admin/delete-row.php",
            type: "GET",
            data:{"id": id},
            success:function(){
                alert("Delete done!");
                refresh();
            }
        });
    });

    $('#logout-button').click(function() {
        $.ajax({
            url:"php/auth/logout.php",
            success:function(){

            }
        });
    });
});
