(function (window) {
    var myScrollbar;
    if (window.myScrollbar) {
        myScrollbar = window.myScrollbar
    };
    myScrollbar = {
        $html: $("html"),
        $body: $("body"),
        originalBodyPad: null,
        scrollbarWidth: 0,
        hide: function () {
            this.checkScrollbar();
            this.setScrollbar();
            this.$html.css("overflow", "hidden")
        },
        show: function () {
            this.$html.removeAttr("style");
            this.resetScrollbar()
        },
        checkScrollbar: function () {
            var fullWindowWidth = window.innerWidth;
            if (!fullWindowWidth) {
                var documentElementRect = document.documentElement.getBoundingClientRect();
                fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
            }
            this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth;
            this.scrollbarWidth = this.measureScrollbar()
        },
        setScrollbar: function () {
            var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10);
            this.originalBodyPad = document.body.style.paddingRight || '';
            if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth)
        },
        measureScrollbar: function () {
            var scrollDiv = document.createElement('div');
            scrollDiv.style.position = "absolute";
            scrollDiv.style.top = "-9999px";
            scrollDiv.style.width = "50px";
            scrollDiv.style.height = "50px";
            scrollDiv.style.overflow = "scroll";
            this.$body.append(scrollDiv);
            var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
            this.$body[0].removeChild(scrollDiv);
            console.log(scrollbarWidth);
            return scrollbarWidth
        },
        resetScrollbar: function () {
            this.$body.css('padding-right', this.originalBodyPad)
        }
    };
    window.myScrollbar = myScrollbar
}(window))

$(function () {
    // wow鍒濆鍖�
    new WOW().init();
    // 鎵嬫満瀵艰埅涓嬫媺
    phNavXl();
})

function phNavXl() {
    $(".ys_navph2_menu_btn").click(function () {
        $(this).toggleClass("act");
        $("html").toggleClass("modal-open")
        $(".ys_navph2_list").toggleClass("act");
    });
    // 浜岀骇
    $(".ys_navph2_subnav li").click(function (e) {
        e.stopPropagation();
        var $childs = $(this).find("ul");
        if ($childs.length > 0) {
            $(this).toggleClass("act").siblings().removeClass("act");
            $(this).siblings().find("ul").stop().slideUp();
            $childs.eq(0).stop().slideToggle();
        }
    });
    // 璇█閫夋嫨
    $(".ys_navph2_lang_btn").click(function () {
        $(".ys_navph2_lang_modal").addClass("act");
    });
    // 杩斿洖涓昏彍鍗�
    $(".ys_navph2_lang_back").click(function () {
        $(".ys_navph2_lang_modal").removeClass("act");
    });
}

$(".ys_navph2_search_btn").click(function () {
    $(".ys_navph2_modal").stop().slideToggle();
})




// 閿氱偣
function yxtop() {
    $(window).load(function () {
        var test = (window.location.href).split('tp/');
        if (!isNaN(test[1])) {
            $("html,body").animate({
                scrollTop: $('[yxdatop-pag="' + test[1] + '"]').offset().top - 90
            }, 700);
        }
    })
};

// top
$('.he_cenavli4').click(function () {
    $("html,body").animate({
        scrollTop: 0
    }, 1000);
});

// 澶撮儴鎼滅储
$('.he_pcser i').click(function () {
    $(this).siblings('.mc_search_xl').slideToggle();
    $(this).toggleClass('act');
})

var isShow = false;
$(".he_searig").click(function (e) {
    e.stopPropagation();
    if (!isShow) {
        $(this).addClass("isshow");
        $(this).find(".mc_search_xl").stop().slideDown().addClass("show");
        isShow = true;
    } else {
        $(this).removeClass("isshow");
        $(this).find(".mc_search_xl").stop().slideUp().removeClass("show");
        isShow = false;
    }
})

$(".mc_search_xl").click(function (e) {
    e.stopPropagation();
})

$(".mc_search_xl").mouseleave(function () {
    $(this).parents(".he_searig").removeClass("isshow");
    $(this).stop().slideUp().removeClass("show");
    isShow = false;
})

// pc涓嬫媺
$('.he_pcnli').hover(function () {
    $(this).find('.he_down').stop().slideDown();
    $('.he_pcbx').addClass('border');
}, function () {
    $(this).find('.he_down').stop().slideUp();
    $('.he_pcbx').removeClass('border');
})

// 瀵艰埅璺熼殢
$(window).on('scroll', function () {
    if ($(window).scrollTop() > 0) {
        $(".he_pc_hd").stop().addClass('act');
        // $(".he_pc_hd").stop().removeClass('act1');
    } else {
        $(".he_pc_hd").stop().removeClass('act');
    }
});

// $('.he_pcbx').hover(function () {
//     $(".he_pc_hd").stop().addClass('act');
// })

$(function () {
    tanchuang();
})


//搴曢儴寮圭獥
function tanchuang() {
    $(function () {
        var scrollInertiaNum;
        if (/firefox/.test(navigator.userAgent.toLowerCase())) {
            scrollInertiaNum = 200;
        } else {
            scrollInertiaNum = 200;
        }
        $(".he_sytaslk").mCustomScrollbar({
            theme: 'dark',
            scrollInertia: scrollInertiaNum,
            horizontalScroll: false,
            axis: "y",
        });
    });
    $(function () {
        var scrollInertiaNum;
        if (/firefox/.test(navigator.userAgent.toLowerCase())) {
            scrollInertiaNum = 200;
        } else {
            scrollInertiaNum = 200;
        }
        $(".he_sytain").mCustomScrollbar({
            theme: 'dark',
            scrollInertia: scrollInertiaNum,
            horizontalScroll: false,
            axis: "y",
        });
    });
    $('.he_sytaslk p').click(function () {
        $(this).parents('.he_sytasle').find(".he_sytaslsle p").text($(this).text());
        $(this).parents('.he_sytasle').find(".he_sytaslsle p").attr("data-txt", $(this).attr("data-txt"));
        $(".type-one").val($(this).attr("data-txt"));
    })
    $('.he_sytasls').click(function (e) {
        e.stopPropagation();
        $(this).siblings('.he_sytaslx').slideToggle();
        $(this).toggleClass('on');
    })
    $('body').click(function () {
        $('.he_sytaslx').slideUp();
        $('.he_sytasls').removeClass('on');
    })
    $('.he_syprale').click(function () {
        $(this).toggleClass('on');
    })
    $('.he_syp4bx .he_syp4inbt').click(function () {
        $('.he_sytanc').stop().fadeIn();
        $("body,html").css({
            "overflow": "hidden"
        })
    })
    $('.he_sytangb').click(function () {
        $('.he_sytanc').stop().fadeOut();
        $("body,html").css({
            "overflow": "auto"
        })
    })
}

$('.he_pcnli').hover(function () {
    $(this).find('.he_gdown').stop().slideDown();
},
    function () {
        $(this).find('.he_gdown').stop().slideUp();
    }
)

$('.he_gdowli1').hover(function () {
    $(this).find('.he_ldown').stop().slideDown();
},
    function () {
        $(this).find('.he_ldown').stop().slideUp();
    }
)


$('body').click(function () {
    $('.he_langla').stop().slideUp();
    $('.he_langp').removeClass('on');
})

$('.he_prodata').click(function () {
    $(this).toggleClass('on');
    $('.he_ladjg').stop().slideToggle();
    $("html,body").animate({
        scrollTop: $('.he_ladjg').offset().top - 0
    }, 700);
})




$('.he_langp').click(function (e) {
    e.stopPropagation();
    $(this).toggleClass('on');
    $('.he_langgz').stop().slideToggle();
    $(".he_pc_hd").stop().toggleClass('act1');
})

$(function () {
    var scrollInertiaNum;
    if (/firefox/.test(navigator.userAgent.toLowerCase())) {
        scrollInertiaNum = 200;
    } else {
        scrollInertiaNum = 200;
    }
    $(".he_xialtw").mCustomScrollbar({
        theme: 'dark',
        scrollInertia: scrollInertiaNum,
        horizontalScroll: false,
        axis: "y",
    });
});

$('.he_laswkfli').hover(function () {
    $(this).addClass('act').siblings().removeClass('act')
    var indela = $(this).index();
    $(this).parents('.he_gdown').find('.he_xialwxul').eq(indela).stop().fadeIn().siblings().stop().hide();
})

$('.he_xianedli').hover(function () {
    var indelae = $(this).index();
    $(this).parents('.he_xialwxul').find('.he_xianedle img').eq(indelae).stop().fadeIn().siblings().stop().hide()
})

$('.he_ftbslt').hover(function () {
    $(this).siblings('.he_ftdoc').stop().fadeIn();
},
    function () {
        $(this).siblings('.he_ftdoc').stop().fadeOut();
    }
)

$('.he_c05tgb').click(function () {
    $(this).parents('.he_c05tanny').find('.video')[0].pause();
})
