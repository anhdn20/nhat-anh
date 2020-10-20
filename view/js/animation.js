var last_scroll = 0; // vị trí cuộn lần cuối = 0 (mặc định)
$(window).scroll(function() {
    var present_scroll = $(this).scrollTop(), // Vị trí cuộn hiện tại
        anima1 = $("#best_sp_box"),
        anima2 = $("#deal"),
        anima3 = $("#deal1"),
        anima4 = $("#deal2"),
        anima5 = $("#about"),
        anima6 = $("#about1"),
        anima7 = $("#post1"),
        anima8 = $("#post2"),
        anima9 = $("#post3");
    // Cuộn xuống
    if (present_scroll > 160) {
        anima1.addClass("best_sp_box");
    }
    if (present_scroll > 600) {
        anima2.addClass("deal");
    }
    if (present_scroll > 740) {
        anima3.addClass("best_sp_box");
    }
    if (present_scroll > 1500) {
        anima4.addClass("deal2");
    }
    if (present_scroll > 2120) {
        anima5.addClass("about2");
        anima6.addClass("about1");
    }
    if (present_scroll > 2620) {
        anima7.addClass("post1");
        anima8.addClass("post1");
        anima9.addClass("post1");
    }

});

$(document).scroll(function() {
    var present_scroll = $(this).scrollTop(),
        top_menu = $("#menu_top"),
        // top_font = top_menu.find("ul li a"),
        top_font = $(".menu_mid>ul>li>a");
    // thay đổi màu nền background and font
    if (present_scroll > 5) {
        top_menu.css({ "background": "#2e2925" });
        top_font.css({ "color": "#c9a027" });
    } else {
        top_menu.removeAttr("style");
        top_font.removeAttr("style");

    }
});