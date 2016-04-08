/**
 * Created by PKubicki on 2015-04-07.
 */
var coloured = 0;
var href = "#content";

jQuery( document ).ready(function() {
    jQuery('#mikolaj-grupa').click(function () {
        salesClear();
        salesPut("mikolaj");
    });

    jQuery('#milena-radaszkiewicz').click(function () {
        salesClear()
        salesPut("milena");
    });

    jQuery('.salesman').on('click',function (e) {
        e.preventDefault();

        var target = href;
        var $target = jQuery(target);

        if(jQuery(window).scrollTop() < 60) {
            jQuery('html, body').stop().animate({
                'scrollTop': $target.offset().top - 112
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        }
        else {
            jQuery('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        }
    });

    jQuery( "#form-block input, #form-block textarea" ).focus(function() {
        if (coloured === 1) {
            jQuery('select#edit-submitted-contact-to').css({"border" : "1px solid #cccccc "});
            jQuery('select#edit-submitted-contact-to').css("backgroundColor", "#ffffff");
            coloured = 0;
        }
    });

});

function salesClear() {
    jQuery( 'select#edit-submitted-contact-to option' ).each(function() {
        if(jQuery(this).attr("selected")) {
            jQuery(this).removeAttr("selected");
        }
    });
}

function salesPut(name) {
    jQuery( 'select#edit-submitted-contact-to option' ).each(function() {
        if (jQuery(this).val() == name) {
            jQuery(this).attr({selected:"selected"});
            jQuery('select#edit-submitted-contact-to').css({"border" : "1px solid #0088cc "});
            jQuery('select#edit-submitted-contact-to').css("backgroundColor", "aliceblue");

            coloured = 1;
        }
    });






}