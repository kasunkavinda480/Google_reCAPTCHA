$(document).ready(function() {

});

function checkfurworking() {
    var chapter = grecaptcha.getResponse();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var email = $('#email').val();
    $.ajax({
        url: "serverfile.php",
        method: "POST",
        data: {
            fname: fname,
            lname: lname,
            email: email,
            recaptcha: chapter
        },
        success: function(data) {
            alert(data);
        }
    });
}