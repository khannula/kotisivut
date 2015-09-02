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

        $(".emptyline")
        {
            document.getElementById("eline").innerHTML = '\n';
        }
        showHideText();
    })

    /**
     * Expands or collapses text section when clicked.
     */
    function showHideText() {

        var text = "Lisää...";
        document.getElementById("demo").innerHTML = text;

        $(".message").hide();
        $(".message2").hide();

        $(".readmore").click(function () {
            // TODO Tee paremmin toi text/text2/demo/demo2-osuus
            if ($(".message").is(":visible")) {
                $(".message").hide();
                text = "Lisää...";
                document.getElementById("demo").innerHTML = text;
            } else {
                $(".message").show("slow");
                text = "Sulje...";
                document.getElementById("demo").innerHTML = text;
            }
        });
        var text2 = "Lisää...";
        document.getElementById("demo2").innerHTML = text2;
        $(".readmore2").click(function () {
            if ($(".message2").is(":visible")) {
                $(".message2").hide();
                text2 = "Lisää...";
                document.getElementById("demo2").innerHTML = text2;
            } else {
                $(".message2").show("slow");
                text2 = "Sulje...";
                document.getElementById("demo2").innerHTML = text2;
            }
        });
    };


