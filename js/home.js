
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
    const $homescroll = $(".homescroll");
    const $sections = $(".parallax-section");
    let lastScrollY = 0;
    let isAnimating = false;
    let lastIndex = $sections.length - 1;
    sectionChanged = false;
    let currentActiveIndex = 0;
    scroller.on("scroll", (args) => {
        if (isAnimating) return;

        let scrollPos = args.scroll.y;
        let scrollDirection = scrollPos > lastScrollY ? 'down' : 'up';
        lastScrollY = scrollPos;
        const viewportHeight = window.innerHeight;


        let shouldSnap = false;

        $sections.each(function (index) {
            let $section = $(this);
            let sectionTop = $(this).offsetTop; // Define sectionTop here
            let sectionBottom = sectionTop + this.offsetHeight;
            let $htwotxt = $section.find('.htwotxt');

            // Check if section top hits bottom of viewport
            const sectionTopAtBottom = (sectionTop - scrollPos) <= viewportHeight &&
                (sectionTop - scrollPos) > 0;

            if (sectionTopAtBottom && scrollDirection === 'down') {
                shouldSnap = true;
                currentActiveIndex = index;
            }

            // Normal active section detection
            if ((scrollPos >= sectionTop && scrollPos < sectionBottom)) {
                if (currentActiveIndex === -1) currentActiveIndex = index;
            }

            if (index === currentActiveIndex) {
                $section.addClass('active').siblings().removeClass('active');

                // Dynamic movement based on scroll direction
                const scrollDistance = scrollPos - sectionTop; // Now sectionTop is defined
                const progress = Math.min(1, Math.max(0, scrollDistance / viewportHeight));

                let offset = scrollDirection === 'down'
                    ? 10 * progress  // Move down to 40%
                    : 10 * (1 - progress); // Move up to 20%

                $htwotxt.css('top', `calc(30% + ${offset}%)`);
            }

            // Navigation visibility control
            if (currentActiveIndex >= lastIndex) {
                $homescroll.addClass("hidden");
            } else {
                $homescroll.removeClass("hidden");
            }
        });

        if (shouldSnap && currentActiveIndex >= 0) {
            isAnimating = true;
            const targetSection = $sections[currentActiveIndex];
            const targetId = targetSection.id || `hometwo${currentActiveIndex + 1}`;

            scroller.scrollTo(`#${targetId}`, {
                offset: 0,
                duration: 800,
                callback: () => {
                    isAnimating = false;
                    // Reset text position
                    targetSection.querySelector('.htwotxt').style.top = '30%';
                }
            });
        }
    });

    $homescroll.find('a').on("click", function (e) {
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