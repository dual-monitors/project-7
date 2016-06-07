$(document).ready(function () {

    $("#quote").owlCarousel({
        navigation: true, //Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigation: false

    });

    $("#menu-btn").on("click", function() {
    	$("#menu-main-nav").toggleClass("show-main-nav");
    });
});