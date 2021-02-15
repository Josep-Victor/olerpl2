$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 0) {
            $(".header").addClass("header-active");
        } else {
           $(".header").removeClass("header-active");
        }
    });
});

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 100) {
            $(".kolom-tiga").addClass("kolom-active");
        } else {
           $(".kolom-tiga").removeClass("kolom-active");
        }
    });
});

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 300) {
            $(".kolom-empat").addClass("kolom-active");
        } else {
           $(".kolom-empat").removeClass("kolom-active");
        }
    });
});

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 400) {
            $(".kolom-lima").addClass("kolom-active");
        } else {
           $(".kolom-lima").removeClass("kolom-active");
        }
    });
});

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 500) {
            $(".kolom-enam").addClass("kolom-active");
        } else {
           $(".kolom-enam").removeClass("kolom-active");
        }
    });
});

