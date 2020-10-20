$(document).ready(function() {
    $("#mt").click(function() {
        $("#boxmt").css("display", "block");
        $("#boxdg").css("display", "none");
        $("#boxcmt").css("display", "none");
        $("#mt").css("border", "1px solid rgb(190, 190, 190)");
        $("#mt").css("border-bottom", "none");
        $("#mt").css("height", "41px");
        $("#cmt").css("height", "40px");
        $("#dg").css("height", "40px");
        $("#dg").css("border", "none");
        $("#cmt").css("border", "none");
    });
    $("#dg").click(function() {
        $("#boxdg").css("display", "block");
        $("#boxmt").css("display", "none");
        $("#boxcmt").css("display", "none");
        $("#dg").css("border", "1px solid rgb(190, 190, 190)");
        $("#dg").css("border-bottom", "none");
        $("#mt").css("border", "none");
        $("#cmt").css("border", "none");
        $("#mt").css("height", "40px");
        $("#cmt").css("height", "40px");
        $("#dg").css("height", "41px");
    });
    $("#cmt").click(function() {
        $("#boxcmt").css("display", "block");
        $("#boxmt").css("display", "none");
        $("#boxdg").css("display", "none");
        $("#cmt").css("border", "1px solid rgb(190, 190, 190)");
        $("#cmt").css("border-bottom", "none");
        $("#dg").css("border", "none");
        $("#mt").css("border", "none");
        $("#mt").css("height", "40px");
        $("#cmt").css("height", "41px");
        $("#dg").css("height", "40px");
    });
});

$(document).ready(function() {
    $("#sort").click(function() {
        $(".sortby").toggle();
    });
});

// update quantity
$(document).ready(function(e) {
    var qua = parseInt($('#quantity').val());

    $('#inc').click(function() {
        qua = qua + 1;

        $('#quantity').val(qua);
    });
    $('#dec').click(function() {
        if (qua == 1) {
            qua == 1;
        } else {
            qua = qua - 1;
            $('#quantity').val(qua);
        }

    });

});