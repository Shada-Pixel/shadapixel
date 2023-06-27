// project carousel
$(".blogCarousal").owlCarousel({
    loop: true,
    margin: 30,
    autoplay: true,
    autoplaySpeed: 1000,
    dots: false,
    responsiveClass: false,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 4.5,
            nav: false
        }
    }
})


// toggling innovation popup
function toggleInnoPop() {
    $(".innovationPop").toggleClass('hidden flex');
}



$(document).ready(function () {

    // Praimary button icon changing
    $('.pbton').mouseenter(function () {
        $(this).children('.pbcon').attr('data-icon', 'uil:arrow-right');
    }).mouseout(function () {
        $(this).children('.pbcon').attr('data-icon', 'uil:angle-right');
    });



    // Slidein
    function isElementInViewport(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    var $elements = $(".showOnScroll");

    function viewportChecker() {
        $elements.each(function () {
            if (isElementInViewport(this)) {
                $(this).addClass("visible");
            } else {
                /* Removes Elements When Not In Viewport */
                //$(this).removeClass("visible");
            }
        });
    }

    $(window).on("load scroll", viewportChecker);
});


//
