$(document).ready(function() {
    $('#form_before_launch').click(function() {
        $(this).animate({height:"250px",width:"400px"});
        $(this).children("p").animate({fontSize:"25px"});
        $("#form").delay(500).fadeIn();
    })
    $("#submit").click(function() {
        var fname = $("#fullname").val();
        // var fname = $("#fullname").val();

        if (fname != "") {
            alert("Ok");
        }
    })
})