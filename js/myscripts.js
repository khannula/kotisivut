/**
 * Created by Kari on 23.6.2015.
 */

    $("document").ready(function() {
        $('#menu').load('menu.html');
        $('#footer1').load('footer1.html');
        $('#footer2').load('footer2.html');

        $('.bxslider').bxSlider({
            adaptiveHeight: true,
            auto: true,
            autoControls: false,
            mode: 'fade',
            speed: 2000
        });
    });

