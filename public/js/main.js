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
