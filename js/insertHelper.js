function insertData(title, uid, pass, url, notes, mobile) {

    var queryResult;
    $.ajax({
        url: 'back-end/insert-script.php',
        method: 'POST',
        data: ({
            'title': title,
            'uid': uid,
            'pass': pass,
            'url': url,
            'notes': notes,
            'mobile': mobile
        }),
        success: function (data) {
            $("#insert_status").empty();
            console.log(data);
            queryResult = data;
            showMessage(queryResult);
        }
    });
}

function showMessage(data) {

}