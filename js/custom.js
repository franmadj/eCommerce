/*========== NAVBAR TRANSPARENT TO SOLID ==========*/

$(document).ready(function () { //when document(DOM) loads completely. 
    // Transition effect for navbar 
    $(window).scroll(function () { //function is called while you scrolls 
        // checks if window is scrolled more than 300px, adds/removes solid class
        if ($(this).scrollTop() > 300) {
            $('.navbar').addClass('solid'); //add class 'solid' in any element which has class 'navbar'
        } else {
            $('.navbar').removeClass('solid'); //remove class 'solid' in any element which has class 'navbar'
        }
    });
});

/*========== CLOSE MOBILE NAV ON CLICK ==========*/

$(document).ready(function () { //when document loads completely.
    $(document).click(function (event) { //click anywhere
        $('.cart-dropdown').fadeOut('slow');
        var clickover = $(event.target); //get the target element where you clicked
        var _opened = $(".navbar-collapse").hasClass("show"); //check if element with 'navbar-collapse' class has a class called show. Returns true and false.
        if (_opened === true && !clickover.hasClass("navbar-toggler")) { // if _opened is true and clickover(element we clicked) doesn't have 'navbar-toggler' class
            $(".navbar-toggler").click(); //toggle the navbar; close the navbar menu in mobile.
        }
    });
});

/*========== CART ==========*/

$(document).ready(function () { //when document is ready
    $('.cart').hover(function () {
        $('.cart-dropdown').fadeIn('slow');
    });
    $('.cart').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('.cart-dropdown').fadeIn('slow');
    });

    $('.dropdownmenu-wrapper').mouseleave(function () {
        $('.cart-dropdown').fadeOut('slow');
    });

    $('.form-control-range').change(function () {
        $(this).next().text($(this).val());
    });

    $('.product-item, .product-item-list').hover(function () {
        $(this).find('.zoom-in').fadeIn('slow');


        $(this).find('.product-image').animate({
            opacity: "0"
        }, 500, function () {

        });

    }, function () {
        $(this).find('.zoom-in').fadeOut('slow');
        $(this).find('.product-image').animate({
            opacity: "1"
        }, 500, function () {
            // Animation complete.
        })
    })

    $('.zoom-in').click(function () {
        $('.bd-example-modal-lg').modal('show')

    });

    $('.bd-example-modal-lg').on('shown.bs.modal', function (e) {


    })
    $('.carousel-thumbnails img').click(function () {
        $('#carouselExampleControls').carousel($(this).data('id'));
    });

    $('.quantity-picker .btn').click(function (e) {
        e.preventDefault();

    });
    var productQuantity = 0;
    $('.product-quantity').change(function () {
        productQuantity = $(this).val();
    });

    $('.btn-plus').click(function () {
        productQuantity++;
        $('.product-quantity').val(productQuantity);
    });
    $('.btn-minus').click(function () {
        productQuantity--;
        if (productQuantity < 0)
            productQuantity = 0;
        $('.product-quantity').val(productQuantity);
    });

    $('.view-mode a').click(function (e) {
        e.preventDefault();
        $('.view-mode a').removeClass('active-view');
        $(this).addClass('active-view');
        if ($(this).hasClass('list-view')) {
            $('#grid-view').hide();
            $('#list-view').show();

        } else {
            $('#list-view').hide();
            $('#grid-view').show();
        }

    });
    
    $('.color-box').click(function(){
        $('.color-box').empty();
        $(this).html('<i class="fas fa-check"></i>');
        
    });
    $('.size-box').click(function(){
        $('.size-box').removeClass('size-active');
        $(this).addClass('size-active');
        
    });
    

    $('.spinner-grow').animate({
        opacity: "0"
    }, 500, function () {
        $('.spinner-grow').remove();
    });

    $('.overlay-loader').animate({
        opacity: "0"
    }, 2000, function () {
        $('.overlay-loader').remove();
    });
    
    
    $('.set-review span').hover(function(){
        let spans=$(this).parent().find('span');
        spans.removeClass('active-star-hover');
        for(var i=0;i<=$(this).index();i++){
            spans.eq(i).addClass('active-star-hover');   
        }
    });
    
    $('.set-review span').click(function(){
        let spans=$(this).parent().find('span');
        spans.removeClass('active-star');
        for(var i=0;i<=$(this).index();i++){
            spans.eq(i).addClass('active-star');   
        }
    })









});







/*========== RELATED PRODUCTS SLIDER ==========*/
//theCarousel
$(document).ready(function () { //when document is ready
    $("#related-slider").owlCarousel({//owlCarousel settings
        items: 3, //by default there are 3 slides display.
        autoplay: true, //the slides will change automatically.
        smartSpeed: 700, //speed of changing wil be 700
        loop: true, //infinite loop; after the last slide, first slide starts
        autoplayHoverPause: true, //when you put mouse over Carousel, slide changing will stop
        responsive: {//responsiveness as screen size changes
            // min-width: 0px
            0: {
                items: 1 //on devices with width 0 to 579px show 1 slide
            },
            // min-width: 579px
            576: {
                items: 2 //on devices with width 579px to 768px show show 2 slides
            },
            // min-width: 768px
            768: {
                items: 3 //on devices with width 768px and above show 3 slides 
            }
        }
    }
    );
});





/*========== TOP SCROLL BUTTON ==========*/

$(document).ready(function () { //when document is ready
    $(window).scroll(function () { //when webpage is scrolled
        if ($(this).scrollTop() > 500) { //if scroll from top is more than 500
            $('.top-scroll').fadeIn(); //display element with class 'top-scroll'; opacity increases
        } else { //if not
            $('.top-scroll').fadeOut(); //hide element with class 'top-scroll'; opacity decreases
        }
    });
});



