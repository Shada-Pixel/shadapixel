// project carousel
$(".blogCarousal").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplaySpeed: 1000,
    dots: false,
    responsiveClass: true,
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
            items: 3,
            nav: false
        }
    }
})


// toggling innovation popup
function toggleInnoPop() {
    $(".innovationPop").toggleClass('hidden flex');
}


$(".innovationPop").click(function(event) {
    if (!$(event.target).closest('.innovationPop').length && !$(event.target).is('.innovationPop')) {
    //   $('.innovationPop').fadeOut();
    $(".innovationPop").toggleClass('hidden flex');

    }
  });
//
