(function ($) { 

$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
	
	    $('#myCarousel').carousel({
    	pause: 'none'
	})
	
	
	//$('.carousel').carousel({
	//	interval: 3000
	//})

$(function() {
  $('input').floatlabel({labelEndTop:0});
});

$("#vote").val('0');
// Create a click handler for your increment button
$("#increaseButton").click(function () {
    var newValue = 1 + parseInt($("#vote").val());
    $("#vote").val(newValue);
});
// .. and your decrement button
$("#decreaseButton").click(function () {
    var newValue = parseInt($("#vote").val()) - 1;
    $("#vote").val(newValue);
});


    
    //Google Map
    var get_latitude = $('#google-map').data('latitude');
    var get_longitude = $('#google-map').data('longitude');

    function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize_google_map);

    new WOW().init()	

})(jQuery);

