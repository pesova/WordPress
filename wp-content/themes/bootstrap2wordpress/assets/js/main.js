$(function() {

    // Cache the window object
    let $window = $(window);

    //Paralax background effect
    $('section[data-type="background"]').each(function() {
        let $bgobj = $(this); // assigning the object

        $(window).scroll(function() {
            // Scroll the background at var speed
            // the y-axiz position is a negative value because we're scrolling up;

            let yPos = -($window.scrollTop() / $bgobj.data('speed'));


            // Put together our background position
            let coords = '50% ' + yPos + 'px';


            //Move the background
            $bgobj.css({ backgroundPosition: coords });
        });
    });
});