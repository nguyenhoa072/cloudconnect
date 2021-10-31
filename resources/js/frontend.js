import $ from "jquery";
window.jQuery = $;
window.$ = $;
import "bootstrap";
import "jquery-validation";
import { WOW } from "wowjs";

jQuery(document).ready(function () {
    
    scrollTop.init();

    initMap.init();

    var wow = new WOW({
        live: false
    });

    wow.init();
});

var scrollTop = {
    init: function() {
        //Check to see if the window is top if not then display button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $(".scroll-top").fadeIn();
            } else {
                $(".scroll-top").fadeOut();
            }
        });

        // Click event to scroll to top
        $(".scroll-top").click(function() {
            $("html, body").animate({ scrollTop: 0 }, 800);
            return false;
        });
    }
};

var initMap = {
    init: function() {
        var contact_map = document.getElementById("contact_map");
        if (contact_map) {
            // const google = window.google;
            var eMap = document.getElementById("listMapID");
            var centerLatLng = {
                lat: Number(eMap.getAttribute("data-map-lat")),
                lng: Number(eMap.getAttribute("data-map-lng"))
            };
            var map = new google.maps.Map(contact_map, {
                zoom: 13,
                center: centerLatLng,
                scrollwheel: false
            });
            $("#listMapID li").each(function() {
                var position = {
                    lat: Number($(this).attr("data-map-lat")),
                    lng: Number($(this).attr("data-map-lng"))
                };
                var title = $(this)
                    .find(".name")
                    .html();
                new google.maps.Marker({
                    position: position,
                    map: map,
                    title: title
                });
            });
            $("#listMapID li").on("click", function() {
                var latLng = {
                    lat: Number($(this).attr("data-map-lat")),
                    lng: Number($(this).attr("data-map-lng"))
                };
                map.panTo(latLng);
            });

            google.maps.event.addDomListener(window, "load", initMap);
        }
    }
};
