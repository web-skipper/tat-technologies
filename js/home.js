
let scroller;
// Initialize Locomotive Scroll
scroller = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});
window.addEventListener('load', function () {
    let section = 1;
    const $scrollLink = $("#scrollLink");
    const $homescroll = $(".homescroll");
    const $sections = $(".hometwo");

    let lastIndex = $sections.length - 1;
    let lastScrolledIndex = 1;
    let lastScrollY = 0;

    scroller.on("scroll", (args) => {
        let scrollPos = args.scroll.y;
        let scrollingDown = scrollPos > lastScrollY;
        lastScrollY = scrollPos;

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
    });
    $homescroll.find('a').on("click", function (e) {
        e.preventDefault();

        let target = $(this).parent().attr("href");
        if (document.querySelector(target)) {
            scroller.scrollTo(document.querySelector(target));
        }
    });

    $homescroll.on("click", function (e) {
        e.preventDefault();

        let target = $(this).attr("href");
        if (document.querySelector(target)) {
            scroller.scrollTo(document.querySelector(target));
        }
    });

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
		responsive:{1025:{ items:10 }, 768:{ items:5 } }
    });

    $('.customnavtwo .owl-dot').on('click', function (e) {
        hfmg.trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    scroller.update();

});

window.addEventListener('load', () => {
    if (scroller) {
        //   scroller.update();
    }
});

window.addEventListener('resize', () => {
    if (scroller) {
        //   scroller.update();
    }
});