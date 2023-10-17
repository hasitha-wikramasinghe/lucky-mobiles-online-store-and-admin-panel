$('.owl-carousel').owlCarousel({
    autoplayHoverPause:true,
    loop:false,
    margin:10,
    nav:true,
    navText: ["<img src='img/pre1.jpg'>","<img src='img/next1.jpg'>"],
    autoplay: 100,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})