
let scroller;
// Initialize Locomotive Scroll
scroller = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
    multiplier: 0.8, // Adjust parallax strength
    smartphone: { smooth: true },
    tablet: { smooth: true }
});
window.addEventListener('load', function () {
    let section = 1;
    const $scrollLink = $("#scrollLink");
    const $homescroll = $(".homescroll");
    const $sections = $(".hometwo");

    let lastIndex = $sections.length - 1;
    let lastScrolledIndex = 1;
    let lastScrollY = 0;

    var windowsWidth;
    windowsWidth = $(window).width();
    windowsHeight = $(window).height();



    scroller.on("scroll", (args) => {
        let scrollPos = args.scroll.y;
        let scrollingDown = scrollPos > lastScrollY;
        lastScrollY = scrollPos;
        fade_effect();

        $sections.each(function (index) {
            let sectionTop = this.offsetTop;
            let sectionBottom = sectionTop + this.offsetHeight;
            //- window.innerHeight / 2
            if (scrollingDown && scrollPos >= sectionTop) {
                lastScrolledIndex = index + 1;
                $homescroll.attr("href", `#hometwo${lastScrolledIndex + 1}`);
                // - window.innerHeight / 2
            } else if (!scrollingDown && scrollPos < sectionBottom) {
                lastScrolledIndex = index - 1;
                $homescroll.attr("href", `#hometwo${lastScrolledIndex - 1}`);
            }
        });

        // lastScrolledIndex = Math.max(1, Math.min(lastScrolledIndex, $sections.length));

        if (lastScrolledIndex >= lastIndex + 1) {
            $homescroll.addClass("hidden");
        } else {
            $homescroll.removeClass("hidden");
        }

        if (windowsWidth >= 992) {
            //console.log('test');
            fade_effect_after("fade-effect-texte");
        }

        if (windowsWidth <= 991) {
            //console.log('test333');
            fade_text_on_scroll();
        }
    });
    $homescroll.find('a').on("click", function (e) {
        e.preventDefault();

        let target = $(this).attr("href");
        if (document.querySelector(target)) {
            scroller.scrollTo(document.querySelector(target));
        }
    });

    // $homescroll.on("click", function (e) {
    //     e.preventDefault();

    //     let target = $(this).attr("href");
    //     if (document.querySelector(target)) {
    //         scroller.scrollTo(document.querySelector(target));
    //     }
    // });

    scroller.update();

    function fade_effect() {
        const scrollDistance = window.innerWidth <= 768 ? 1 : 50;
        document.querySelectorAll('.fade-effect').forEach((element) => {
            const rect = element.getBoundingClientRect();
            const isVisible = rect.top < (window.innerHeight - scrollDistance);

            if (isVisible) {
                element.classList.add('effect-show');
            } else {
                element.classList.remove('effect-show');
            }
        });
    }

    function fade_effect_after(thisGroup) {
        var fade_speed = 400;
        if (thisGroup === "fade-effect-logos") {
            fade_speed = 100;
        }

        if ($("." + thisGroup)[0]) {
            $("." + thisGroup).each(function (i, o) {
                let thisConBound = $(this)[0].getBoundingClientRect();
                let thisConTop = Math.round(thisConBound.top);

                if (thisConTop < $(window).height() - 50) {
                    if ($(o).css("opacity") == 0) {
                        setTimeout(function () {
                            $(o).addClass("effect-show");
                        }, fade_speed * i);
                    }
                }
            });
        }
    }

    function fade_text_on_scroll() {
        if ($(".section-2x-height-text")[0]) {
            let thisConBound = $(".section-2x-height-text")[0].getBoundingClientRect();
            let scrollConTop = Math.round(thisConBound.top);
            let scrollContHeight = $(".section-2x-height-text").height() / 2;
            let texts = $(".texts-container .text-block");

            if (scrollConTop <= -50) {
                texts.map(function (e) {
                    let sectionsHeight = Math.round((scrollContHeight) / texts.length);
                    let secHeight = sectionsHeight * (e + 1);
                    let sectionTop;

                    if (e === 0) {
                        sectionTop = scrollConTop;
                    } else {
                        sectionTop = scrollConTop + secHeight - sectionsHeight;
                    }

                    let sectionBottom = sectionTop + secHeight;
                    if (sectionTop < 0 && sectionBottom < secHeight) {
                        $(texts[e - 1]).addClass("effect-text-up");
                        $(texts[e]).addClass("effect-show");
                    } else {
                        $(texts[e - 1]).removeClass("effect-text-up");
                        $(texts[e]).removeClass("effect-show");
                    }
                });
            } else {
                $(".headline-animation").removeClass("effect-headline-up");
                $(texts).removeClass("effect-show");
            }
        }
    }
    var hps = $('.homeslide').owlCarousel({
        nav: false,
        loop: false,
        autoplay: false,
        dots: true,
        margin: 0,
        singleItem: true,
        slideSpeed: 1000,
        smartSpeed: 1000,
        items: 1,
        navText: [$(''), $('')],
        dotsContainer: '#custom-owl-dots',
        responsiveClass: true,
    });
    $('.customnav .owl-dot').on('click', function (e) {
        hps.trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    var hfmg = $('.hfiveimg').owlCarousel({
        nav: false,
        loop: false,
        autoplay: false,
        dots: true,
        margin: 0,
        singleItem: true,
        slideSpeed: 1000,
        smartSpeed: 1000,
        items: 1,
        navText: [$(''), $('')],
        dotsContainer: '#custom-owl-dots2',
        animateOut: 'fadeOut',
        responsiveClass: true,
    });
    var hss = $('.hsixslider').owlCarousel({
        nav: false,
        loop: true,
        autoplay: true,
        dots: true,
        margin: 0,
        singleItem: true,
        items: 10,
        navText: [$(''), $('')],
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        responsiveClass: true,
        responsive: { 1025: { items: 10 }, 768: { items: 5 } }
    });

    $('.customnavtwo .owl-dot').on('click', function (e) {
        hfmg.trigger('to.owl.carousel', [$(this).index(), 300]);
    });

});

window.addEventListener('load', () => {
    if (scroller) {
        scroller.update();
    }
});

window.addEventListener('resize', () => {
    if (scroller) {
        scroller.update();
    }
});