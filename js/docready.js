$(document).ready(function () {
    
    /* Button click listeners
     */
    $("#logout_btn").on("click", function () {
        $.ajax({
            url: 'back-end/logout-script.php',
            success: function (data) {
                window.open('index.php', '_self');
            }
        });
    });

    $("#about_us").on("click", function(){
        window.open('about_us.php', '_self');
    });

    $("#home").on("click", function(){
        window.open('dashboard.php', '_self');
    });

    $("#submit_button").on("click", function(){
        var title, uid, pass, url, notes, mobile;
        title = $("#insert_title").val();
        uid = $("#insert_uid").val();
        pass = $("#insert_password").val();
        url = $("#insert_url").val();
        notes = $("#notes").val();
        mobile = $("#insert_number").val();

        if (title == "" | uid == "" | pass == "" | url == "") {
            $("#insert_status").empty();
            $("#insert_status").append("<p>Required fields are empty</p>");
            return;
        }
        
        insertData(title, uid, pass, url, notes, mobile);

    })

    jQuery(document.body).on('click', '.select-all-tuple', function(event) {
        console.log(this);
        var displayOfEdit = this.nextSibling.style.display;
        if(displayOfEdit == "") {
            this.nextSibling.style.display = "flex";
        } else {
            if(displayOfEdit == "flex") {
                this.nextSibling.style.display = "";
            }
        }
    }); 


    /* Modal click listeners
     */
    // var modal = document.getElementsByClassName('modal')[0];
    // jQuery(document.body).on('click', '.select-all-tuple', function(event) {
    // // $(".select-all-tuple").on("click", function () {
    //     console.log("clicked");
    //     modal.style.display = "block";
    //     console.log('exe');
    // });

    // jQuery(document.body).on('click', '.close', function(event) {
    // // $(".close").on("click", function(){
    //     modal.style.display = "none";
    // });

    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // }

});